<?php
App::uses('AppController', 'Controller');
App::uses('Location', 'Institution');
App::uses('Location', 'UserType');
App::uses('Location', 'FieldOfStudy');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Auth', 'Cookie');
/**
 * login method
 *
 * @return void
 */
	public function login(){
		if($this->request->is('post')){
			$user = $this->User->find('first', array('conditions'=>array("User.email"=>$this->request->data['User']['email'], "User.password"=>$this->request->data['User']['password'])));
			if($user){
				$this->Session->write("Auth.userdata",json_encode($user));
				if($user['User']['user_types_id'] == 1){
				//mentor
					$this->redirect(array("controller"=>"users","action"=>"/edit/".$user['User']['id']));
				}elseif ($user['User']['user_types_id'] == 3) {
					$this->redirect(array("controller"=>"users","action"=>"/edit/".$user['User']['id']));
				}else{
					$this->redirect(array("controller"=>"Institutions","action"=>"/"));
				}
			}
		}else{
			$this->Session->setFlash(__('Invalid request shit head'), 'default', array('class' => 'alert alert-danger'));
			return $this->redirect($this->referer());
		}
		/*
			$session_user = json_decode($this->Session->read("Auth.userdata"),1);
			print_r($session_user);
			echo "login page";
			exit
		*/
		return $this->redirect(array("controller"=>"users",'action' => 'landing'));
	}
	public function logout(){
	//logout
		$this->Session->write("Auth.userdata","");
		$this->Session->delete("Auth");
		$this->Session->destroy();
		$this->Session->setFlash(__('Logged out.'), 'default', array('class' => 'alert alert-danger'));
		return $this->redirect(array('controller'=>"users", 'action' => 'landing'));
	}
/**
 * index method
 *
 * @return void
 */
	public function chat(){
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
	public function landing() {
		$session_user = json_decode($this->Session->read("Auth.userdata"),1);
		if($session_user){
			if($session_user['User']['user_types_id'] == 1){
			//mentor
				$this->redirect(array("controller"=>"users","action"=>"/edit/".$session_user['User']['id']));
			}else{
				$this->redirect(array("controller"=>"Institutions","action"=>"/"));
			}
		}
		$this->loadModel('Institution');
		$this->loadModel('UserType');
		$this->loadModel('FieldOfStudy');

		
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$userTypes = $this->UserType->find('list');
		$institutions = $this->Institution->find('list');
		$fieldofstudies = $this->FieldOfStudy->find('list');
		$this->set(compact('userTypes', 'institutions', 'fieldofstudies'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Company');
		$this->loadModel('Institution');
		$this->loadModel('UserType');
		$this->loadModel('FieldOfStudy');
		
		//print_r($this->request->data['User']);
		if($this->request->data['User']['password'] != $this->request->data['User']['password_confirm']){
			$this->Session->setFlash(__('Registration failed, Passwords not the same'), 'default', array('class' => 'alert alert-danger'));
			return $this->redirect($this->referer());
		}
		$this->request->data['User']['field_of_study_id'] = $this->request->data['User']['fieldofstudies_id'];

//		echo "<pre>";
//		print_r($this->request->data);
//		exit;

		if ($this->request->is('post')) {
			if($this->User->find('all',array('conditions'=>"email='{$this->data['User']['email']}'"))) {
				$this->Session->setFlash(__('Email Address is already used,Plesae try again'), 'default', array('class' => 'alert alert-danger'));
			}else {
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved, please login.'), 'default', array('class' => 'alert alert-success'));
					return $this->redirect(array('action' => 'landing'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				}
			}

		}
		$userTypes = $this->UserType->find('list');
		$institutions = $this->Institution->find('list');
		$fieldofstudy = $this->FieldOfStudy->find('list');
		$this->set(compact('userTypes', 'institutions', 'fieldofstudy'));
	}
	public function terms(){
	
	}
	public function contactus(){
	
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->loadModel('Institution');
		$this->loadModel('UserType');
		$this->loadModel('FieldOfStudy');


		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}

		//Grab the list of user related campaigns from the model
		$this->loadModel('Campaign');
		$campaignList = $this->Campaign->getList($id);
		if(!empty($campaignList)) {
			$this->set('campaigns', $campaignList);
		}


		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been updated.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				return $this->redirect($this->referer());
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$userTypes = $this->UserType->find('list');
		$institutions = $this->Institution->find('list');
		$fieldofstudy = $this->FieldOfStudy->find('list');
		$this->set(compact('userTypes', 'institutions', 'fieldofstudy'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
