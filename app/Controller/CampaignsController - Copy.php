<?php

  class CampaignsController extends AppController
  {
	  public $uses = array(
	    
		);
	  
	  public $components = array(
	     'CampaignAccess', 'Paginator', 'Session', 'Auth', 'Cookie'
		);
		
      public function index() 
	  {
		  
		  $user = json_decode($this->Session->read("Auth.userdata"), 3);
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




    public function create($id = null) {

        //get user session
        $session_user = json_decode($this->Session->read("Auth.userdata"),3);

        //extract user id
        $userId = $session_user['User']['id'];
        $authId = $session_user['User']['auth_id'];

//        echo $userId; exit;

            if(!$this->CampaignAccess->isAllowed($authId,$userId)){
                return $this->redirect(array('action' => 'instructions', $id));
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