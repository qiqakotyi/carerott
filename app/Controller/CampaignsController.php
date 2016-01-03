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
		  $campaigns = $this->Campaign->find('all', array(
		     /** 
			   This line has the user id hard code which is undesireable.
			   
			   TRy to see if you can fix this bug. In doing so check the 
			   loader component.
			  */
		     'conditions' => array('Campaign.user_id' => 23)
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
			 $this->redirect(array('action' => 'index'));
		   }
		   			
		  if($this->request->is('post')){
			  
			  /**
			    Because when we add a new campaign we do not have the user id we have 
				to manually add it based on the logged in user.
			   */
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
   }