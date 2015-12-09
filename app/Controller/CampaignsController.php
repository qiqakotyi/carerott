<?php
App::uses('AppController', 'Controller');
App::uses('Location', 'Institution');
App::uses('Location', 'UserType');
App::uses('Location', 'FieldOfStudy');
/**
 * Created by PhpStorm.
 * User: phumlani
 * Date: 12/8/15
 * Time: 10:53 PM
 */



class CampaignsController extends AppController {

    public $components = array('CampaignAccess', 'Paginator', 'Session', 'Auth', 'Cookie');




    public function  index() {
        $this->autoRender = false;
//                echo "checking"; exit;

                $session_user = json_decode($this->Session->read("Auth.userdata"),3);
                $campaigns = array();
                if($session_user) {
                    $campaigns = $this->Campaign->getList();

                    if($campaigns > 0) {
                        $this->set('campaigns',$campaigns);
                    } else {

                    }



                }
        $this->set('campaigns', $campaigns);
        }




    public function add($id = null) {


        //get user session
        $session_user = json_decode($this->Session->read("Auth.userdata"),3);

        //extract user id
//        $userId = $session_user['User']['id'];
        $authId = $session_user['User']['auth_id'];

//        echo "<pre>";
//        print_r($session_user); exit;

//        if (!$this->Campaign->exists($id)) {
//            throw new NotFoundException(__('Invalid Campaign'));
//        }






        if(!$this->CampaignAccess->isAllowed($authId)){
//            $this->redirect(array('action' => 'instructions'));
            $this->redirect(array('controller'=>'campaigns','action' => 'instructions'));
//            throw new NotFoundException(__('You are not allowed to create any campaigns. Please but bundles.'));

        }


        //Make the Campaign available to the view automaticcaly if we editing
        if(!is_null($id)){
            $this->data = $this->Campaign->find('first', array(
                'conditions' => array('id' => $id)
            ));
        }

        //Check if user has posted the form edit and continue saving on data validation success
        if ($this->request->is('post')) {

            pr($this->data); exit();
            if($this->Campaign->save($this->data)){
                $this->Session->setFlash(/* Flash message here...*/);
                $this->redirect(/* Url will go here maybe list user campaigns within this controller...*/);
            }else{
                $this->Session->setFlash(/* Flash message here...*/);
            }

        }

        $this->render('create');
    }


    public function instructions    () {

    }


}