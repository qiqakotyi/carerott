<?php
App::uses('AppController', 'Controller');
/**
 * FieldOfStudies Controller
 *
 * @property FieldOfStudy $FieldOfStudy
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FieldOfStudiesController extends AppController {

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
		$this->FieldOfStudy->recursive = 0;
		$this->set('fieldOfStudies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FieldOfStudy->exists($id)) {
			throw new NotFoundException(__('Invalid field of study'));
		}
		$options = array('conditions' => array('FieldOfStudy.' . $this->FieldOfStudy->primaryKey => $id));
		$this->set('fieldOfStudy', $this->FieldOfStudy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FieldOfStudy->create();
			if ($this->FieldOfStudy->save($this->request->data)) {
				$this->Session->setFlash(__('The field of study has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The field of study could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->FieldOfStudy->exists($id)) {
			throw new NotFoundException(__('Invalid field of study'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FieldOfStudy->save($this->request->data)) {
				$this->Session->setFlash(__('The field of study has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The field of study could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('FieldOfStudy.' . $this->FieldOfStudy->primaryKey => $id));
			$this->request->data = $this->FieldOfStudy->find('first', $options);
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
		$this->FieldOfStudy->id = $id;
		if (!$this->FieldOfStudy->exists()) {
			throw new NotFoundException(__('Invalid field of study'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FieldOfStudy->delete()) {
			$this->Session->setFlash(__('The field of study has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The field of study could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
