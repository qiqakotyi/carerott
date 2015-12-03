<?php

error_reporting(0);

App::uses('AppController', 'Controller');
App::uses('Location', 'TopicsStatus');

/**
 * Topics Controller
 *
 * @property Topic $Topic
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TopicsController extends AppController {

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
public function index($mentorid,$mentorname){
	$this->Session->write("Auth.mentor", $mentorid);
	$this->Session->write("Auth.mentorname", $mentorname);
	$this->Topic->recursive = 0;
	$this->set('topics', $this->Paginator->paginate());
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function view($id = null) {
	if (!$this->Topic->exists($id)) {
		throw new NotFoundException(__('Invalid topic'));
	}
	$options = array('conditions' => array('Topic.' . $this->Topic->primaryKey => $id));
	$this->set('topic', $this->Topic->find('first', $options));
}

/**
 * add method
 *
 * @return void
 */
public function add() {
	$this->loadModel('TopicsStatus');

	if ($this->request->is('post')) {
		$this->Topic->create();
		if ($this->Topic->save($this->request->data)) {
			$this->Session->setFlash(__('The topic has been saved.'), 'default', array('class' => 'alert alert-success'));
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The topic could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
	}
	$studentTopicStatuses = $this->TopicsStatus->find('list');
	$this->set(compact('topicstatus', $studentTopicStatuses));
}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function edit($id = null) {
	if (!$this->Topic->exists($id)) {
		throw new NotFoundException(__('Invalid topic'));
	}
	if ($this->request->is(array('post', 'put'))) {
		if ($this->Topic->save($this->request->data)) {
			$this->Session->setFlash(__('The topic has been saved.'), 'default', array('class' => 'alert alert-success'));
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The topic could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
	} else {
		$options = array('conditions' => array('Topic.' . $this->Topic->primaryKey => $id));
		$this->request->data = $this->Topic->find('first', $options);
	}
	$studentTopicStatuses = $this->Topic->StudentTopicStatus->find('list');
	$this->set(compact('studentTopicStatuses'));
}
public function localhost() {
	return $this->redirect(array('action' => 'index.js'));
}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function delete($id = null) {
	$this->Topic->id = $id;
	if (!$this->Topic->exists()) {
		throw new NotFoundException(__('Invalid topic'));
	}
	$this->request->onlyAllow('post', 'delete');
	if ($this->Topic->delete()) {
		$this->Session->setFlash(__('The topic has been deleted.'), 'default', array('class' => 'alert alert-success'));
	} else {
		$this->Session->setFlash(__('The topic could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
	}
	return $this->redirect(array('action' => 'index'));
}
}
