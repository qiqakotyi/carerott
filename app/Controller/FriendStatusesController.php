<?php
App::uses('AppController', 'Controller');
/**
 * FriendStatuses Controller
 *
 * @property FriendStatus $FriendStatus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FriendStatusesController extends AppController {

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
		$this->FriendStatus->recursive = 0;
		$this->set('friendStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FriendStatus->exists($id)) {
			throw new NotFoundException(__('Invalid friend status'));
		}
		$options = array('conditions' => array('FriendStatus.' . $this->FriendStatus->primaryKey => $id));
		$this->set('friendStatus', $this->FriendStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FriendStatus->create();
			if ($this->FriendStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The friend status has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friend status could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->FriendStatus->exists($id)) {
			throw new NotFoundException(__('Invalid friend status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FriendStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The friend status has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friend status could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('FriendStatus.' . $this->FriendStatus->primaryKey => $id));
			$this->request->data = $this->FriendStatus->find('first', $options);
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
		$this->FriendStatus->id = $id;
		if (!$this->FriendStatus->exists()) {
			throw new NotFoundException(__('Invalid friend status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FriendStatus->delete()) {
			$this->Session->setFlash(__('The friend status has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The friend status could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
