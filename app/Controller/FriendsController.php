<?php
App::uses('AppController', 'Controller');
/**
 * Friends Controller
 *
 * @property Friend $Friend
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FriendsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Friend->recursive = 0;
		$this->set('friends', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Friend->exists($id)) {
			throw new NotFoundException(__('Invalid friend'));
		}
		$options = array('conditions' => array('Friend.' . $this->Friend->primaryKey => $id));
		$this->set('friend', $this->Friend->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($mentor_id) {
		//print_r($this->request->data);
		//exit;
		
		if ($mentor_id) {
			$session_user = json_decode($this->Session->read("Auth.userdata"),1);
			$this->request->data['Friend']['mentor_id'] 		= $mentor_id;
			$this->request->data['Friend']['student_id'] 		= $session_user['User']['id'];
			$this->request->data['Friend']['friend_status_id']	= 1;
			$is_available = $this->Friend->find('first', array('conditions'=>array("Friend.student_id"=>$this->request->data['Friend']['student_id'], "Friend.mentor_id"=>$this->request->data['Friend']['mentor_id'])));
			
			if(!$is_available){
				$this->Friend->create();
				if ($this->Friend->save($this->request->data)) {
					$this->Session->setFlash(__('Mentor has been requested.'), 'default', array('class' => 'alert alert-success'));
					return $this->redirect(array('controller'=>'institutions',"action" => 'mymentors'));
				} else {
					$this->Session->setFlash(__('The friend could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
				}
			}else{
				$this->Session->setFlash(__('Mentor already invited'), 'default', array('class' => 'alert alert-danger'));
				return $this->redirect($this->referer());
			}
		}
		$friendStatuses = $this->Friend->FriendStatus->find('list');
		$this->set(compact('friendStatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Friend->exists($id)) {
			throw new NotFoundException(__('Invalid friend'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('The friend has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friend could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Friend.' . $this->Friend->primaryKey => $id));
			$this->request->data = $this->Friend->find('first', $options);
		}
		$friendStatuses = $this->Friend->FriendStatus->find('list');
		$this->set(compact('friendStatuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Friend->id = $id;
		if (!$this->Friend->exists()) {
			throw new NotFoundException(__('Invalid friend'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Friend->delete()) {
			$this->Session->setFlash(__('The friend has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The friend could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
