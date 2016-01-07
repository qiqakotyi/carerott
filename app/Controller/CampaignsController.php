<?php

  class CampaignsController extends AppController
  {
	  public $components = array('Loader', 'CampaignAccess');
	  
	  public function beforeFilter()
	  {
		  parent::beforeFilter();
		  $this->Auth->allow('create');
	   }
	   
	  public function index()
	  {
		  $session_user = json_decode($this->Session->read("Auth.userdata"),1);
		  $userId =  $session_user['User']['id'];

		  $campaigns = $this->Campaign->find('all', array(
		     /** 
			   This line has the user id hard code which is undesireable.
			   
			   TRy to see if you can fix this bug. In doing so check the 
			   loader component.
			  */
		     'conditions' => array('Campaign.user_id' => $userId)
			));

		  $this->set(array(
		     'campaigns' => $campaigns
			));
	   }
	  
	  public function create($id = null)
	  {
		  if(!$this->CampaignAccess->hasCredits($this->_userId, $this->_userTypeId)){

			 $this->Session->setFlash(__(
			    "It turns out you do not have credits to add/edit a campaign.", true
			   ));
			   
			 //Choose where to redirect if a user has no credits  
			 $this->redirect(array('action' => 'instructions'));
		   }
		   			
		  if($this->request->is('post')){
			  
			  /**
			    Because when we add a new campaign we do not have the user id we have 
				to manually add it based on the logged in user.
			   */

//			  $file = $this->request->data['Campaign']['main_banner'];
//
//			  echo "<pre>";
//			  print_r($file); exit;


			  //Check if image has been uploaded
			  if (!empty($this->request->data['Campaign']['main_banner']['name'])) {
				  $file = $this->request->data['Campaign']['main_banner'];

				  echo "<pre>";
				  print_r($file); exit;

				  $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
				  $arr_ext = array('jpg', 'jpeg', 'gif','png');

				  if (in_array($ext, $arr_ext)) {
					  move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/webimages/campaigns/' . $file['name']);
					  //prepare the filename for database entry
					  $this->request->data['Campaign']['image'] = $file['name'];
				  }
			  }

			  $this->request->data['Campaign']['user_id'] = $this->_userId;
			  
			  if($this->Campaign->save($this->data)){
				  
				  //Bind Model on the fly. You can unbind it later.
				  $this->Campaign->bindModel(array(
				     'belongsTo' => array('Credit')
					));
				  
				  //Get the current value of credits for the user and minus one.
				  $credit = $this->Campaign->Credit->find('first', array(
				     'fields' => array('Credit.id', 'Credit.value'),
				     'conditions' => array('Credit.user_id' => $this->_userId)
					));
				  
				  /**
				    We could have used the Event System here to dispatch the 
					credit information update on every save of Campaign model.
					
					This updates our credit value everytime a user creates a campaign.
				  */
				  $this->Campaign->Credit->save(array(
				     'id' => $credit['Credit']['id'], 
					 'value' => (int) $credit['Credit']['value'] - 1
				    ));
				  				  
				  $this->Session->setFlash(__('Campaign has successfully been created', true));
				  $this->redirect(array('action' => 'index'));
			   }else{
				  //On validation failure
				  $this->Session->setFlash(__('Campaign could not be created', true));
			  }
		    }elseif(!empty($id)){
				
			  $this->data = $this->Campaign->find('first', array(
			      'conditions' => array('Campaign.active' => 1, 'Campaign.id' => $id)
				));
		   } 
	   }


	  public  function edit() {

	  }


	  public function campaigns() {

		  $campaigns = $this->Campaign->find('all', array(
			  /**
			  This line has the user id hard code which is undesireable.

			  TRy to see if you can fix this bug. In doing so check the
			  loader component.
			   */
			  'conditions' => array('Campaign.active' => 1)
		  ));

		  $this->set(array(
			  'campaigns' => $campaigns
		  ));


      }

	  public function campaign() {

		  $campaignId = $_GET['id'];


		  $campaign = $this->Campaign->find('all', array(
			  /**
			  This line has the user id hard code which is undesireable.

			  TRy to see if you can fix this bug. In doing so check the
			  loader component.
			   */
			  'conditions' => array('Campaign.id' => $campaignId),
			  'AND' => array('Campaign.active' => 1)
		  ));

		  $this->set(array(
			  'campaign' => $campaign
		  ));


	  }

	  public function instructions() {

	  }

	  public function mycampaigns(){
		  $session_user = json_decode($this->Session->read("Auth.userdata"),1);
		  $userId =  $session_user['User']['id'];

		  $campaigns = $this->Campaign->find('all', array(
			  /**
			  This line has the user id hard code which is undesireable.

			  TRy to see if you can fix this bug. In doing so check the
			  loader component.
			   */
			  'conditions' => array('Campaign.user_id' => $userId)
		  ));

		  $this->set(array(
			  'campaigns' => $campaigns
		  ));

	  }

	  public function payments() {
		  $session_user = json_decode($this->Session->read("Auth.userdata"),1);
		  if($session_user == null) {
			  $this->redirect(array("controller"=>"Users",'action' => 'landing#login'));
		  }

	  }

   }