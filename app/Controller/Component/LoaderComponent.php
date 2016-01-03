<?php

  class LoaderComponent extends Component
  {
	  public $defaults = array(
	      '_userId' => null,
		  '_userTypeId' => null
		);
	  	  
	  public function __construct(ComponentCollection $collection, $settings = array())
	  {
		  $settings = array_merge($this->settings, (array)$settings);
          $this->Controller = $collection->getController();

          $this->setUser();
		  $this->setDefaults();
		  
          parent::__construct($collection, $settings);
	   }
	  
	  public function setDefaults()
	  {
		  $controller = $this->Controller;
		  foreach($this->defaults as $key => $value){
			  $controller->set($key, $value);
			  $controller->{$key} =  $value;
		   }
	   }
	    
	  public function setUser()
	  {
		  $user = array();
		  if($this->Controller->Session->check('Auth.userdata')){
		     $user = (array) json_decode($this->Controller->Session->read('Auth.userdata'));
		   }
		  
		  if(!empty($user)){
		     $this->defaults['_userId'] = $user['User']->id;
			 $this->defaults['_userTypeId'] = $user['User']->user_types_id;
		   }
	   }
   }