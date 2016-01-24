<?php

/**
 * Created by PhpStorm.
 * User: phumlani
 * Date: 12/17/15
 * Time: 10:32 AM
 */


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

    class CompanyController extends AppController {

        public $components = array('Loader', 'Paginator', 'Session', 'Auth', 'Cookie');

        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->userModel = 'User';
            $this->Auth->allow('*');
            // Controller spesific beforeFilter
        }

        public function admin_create() {

        }

    }

?>