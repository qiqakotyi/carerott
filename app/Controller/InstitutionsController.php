<?php
App::uses('AppController', 'Controller');
/**
 * Institutions Controller
 *
 * @property Institution $Institution
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */

class InstitutionsController extends AppController {

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
		$this->Institution->recursive = 0;
		$institutions = $this->Institution->find("all", array(
				'joins' => array(
					array('table'=> 'users',
						'type' => '',
						'alias' => 'Users',
						'conditions' => array('Institution.id = Users.institutions_id AND Users.user_types_id = 1')
					),
				),
				"group"=>array("Institution.id"),
				"fields"=>array("Institution.*, Users.*")
			)
		);
		$this->set('institutions',$institutions);
	}
	public function mentors($institution_id) {
		$this->Institution->recursive = 0;
		$mentors = $this->Institution->find("all", array(
				'conditions'=>array('Institution.id'=>$institution_id),
				'joins' => array(
					array('table'=> 'users',
						'type' => '',
						'alias' => 'Users',
						'conditions' => array('Institution.id = Users.institutions_id AND Users.user_types_id = 1')
					),
				),
				"fields"=>array("Institution.*, Users.*")
			)
		);
		$this->set('mentors',$mentors);
	}

	public function mymentees() {
		$this->Institution->recursive = 0;
		$session_user = json_decode($this->Session->read("Auth.userdata"),1);
		
		$mentors = $this->Institution->find("all", array(
				'joins' => array(
					array('table'=> 'users',
						'type' => '',
						'alias' => 'Users',
						'conditions' => array('Institution.id = Users.institutions_id AND Users.user_types_id = 2')
					),
					array('table'=> 'friends',
						'type' => '',
						'alias' => 'Friend',
						'conditions' => array('Friend.mentor_id = '.$session_user['User']['id'])
					),
				),
				"group"=>array("Users.id"),
				"fields"=>array("Institution.*, Users.*","Friend.*")
			)
		);
		/*
		echo "<pre>";
		print_r($mentors);
		echo "</pre>";
		exit;
		*/
		$this->set('mentors',$mentors);
	}
	public function myMentors() {
		$this->Institution->recursive = 0;
		$session_user = json_decode($this->Session->read("Auth.userdata"),1);
		
		$mentors = $this->Institution->find("all", array(
				'joins' => array(
					array('table'=> 'users',
						'type' => '',
						'alias' => 'Users',
						'conditions' => array('Institution.id = Users.institutions_id AND Users.user_types_id = 1')
					),
					array('table'=> 'friends',
						'type' => '',
						'alias' => 'Friend',
						'conditions' => array('Friend.student_id = '.$session_user['User']['id'])
					),
				),
				"group"=>array("Users.id"),
				"fields"=>array("Institution.*, Users.*","Friend.*")
			)
		);
		/*echo "<pre>";
		print_r($mentors);
		echo "</pre>";
		exit;
		*/
		$this->set('mentors',$mentors);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Institution->exists($id)) {
			throw new NotFoundException(__('Invalid institution'));
		}
		$options = array('conditions' => array('Institution.' . $this->Institution->primaryKey => $id));
		$this->set('institution', $this->Institution->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Institution->create();
			if ($this->Institution->save($this->request->data)) {
				$this->Session->setFlash(__('The institution has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institution could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Institution->exists($id)) {
			throw new NotFoundException(__('Invalid institution'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Institution->save($this->request->data)) {
				$this->Session->setFlash(__('The institution has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institution could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Institution.' . $this->Institution->primaryKey => $id));
			$this->request->data = $this->Institution->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Institution->id = $id;
		if (!$this->Institution->exists()) {
			throw new NotFoundException(__('Invalid institution'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Institution->delete()) {
			$this->Session->setFlash(__('The institution has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The institution could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
