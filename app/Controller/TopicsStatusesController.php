<?php
App::uses('AppController', 'Controller');
/**
 * TopicsStatuses Controller
 *
 * @property TopicsStatus $TopicsStatus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TopicsStatusesController extends AppController {

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
		$this->TopicsStatus->recursive = 0;
		$this->set('topicsStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TopicsStatus->exists($id)) {
			throw new NotFoundException(__('Invalid topics status'));
		}
		$options = array('conditions' => array('TopicsStatus.' . $this->TopicsStatus->primaryKey => $id));
		$this->set('topicsStatus', $this->TopicsStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TopicsStatus->create();
			if ($this->TopicsStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The topics status has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The topics status could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->TopicsStatus->exists($id)) {
			throw new NotFoundException(__('Invalid topics status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TopicsStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The topics status has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The topics status could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('TopicsStatus.' . $this->TopicsStatus->primaryKey => $id));
			$this->request->data = $this->TopicsStatus->find('first', $options);
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
		$this->TopicsStatus->id = $id;
		if (!$this->TopicsStatus->exists()) {
			throw new NotFoundException(__('Invalid topics status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TopicsStatus->delete()) {
			$this->Session->setFlash(__('The topics status has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The topics status could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
