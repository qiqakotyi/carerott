
<?php

error_reporting(0);

App::uses('AppController', 'Controller');

/**
 * Topics Controller
 *
 * @property Topic $Topic
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TplController extends AppController {
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
/*
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function page.jade() {

	}


}