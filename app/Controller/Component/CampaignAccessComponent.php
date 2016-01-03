<?php
/**
 * Created by PhpStorm.
 * User: phumlani
 * Date: 12/9/15
 * Time: 3:38 PM
 */
class CampaignAccessComponent extends Component{

protected $Controller;

    public function __contsruct(ComponentCollection $collection, $settings = array())
	{

        $settings = array_merge($this->settings, (array)$settings);
        $this->Controller = $collection->getController();

        parent::__construct($collection, $settings);

      }
	  
	 public function hasCredits($userId, $userTypeId)
	 {		 
		 $hasCredits = false;
		 if($userTypeId == 3){
			
			$creditModel = ClassRegistry::init('Credit');
			$credit = $creditModel->find('first', array(
			    'fields' => array('Credit.value'),
				'conditions' => array('Credit.user_id' => $userId)
			  ));

			if(((int) $credit['Credit']['value'] > 0)){
		        
				/*$this->Controller->set('_campaignCredits', (int) $credit['Credit']['value']);
				$this->Controller->_campaignCredits = (int) $credit['Credit']['value'];*/
				
				$hasCredits = true;
			 }
			 			  
		  }
		  
		  return $hasCredits;
	  }


    public function isAllowed($userId){
        $userFound = false;

        if(!empty($userId)) {

            $userModel = $userFound = ClassRegistry::init('User');

            $userModel->unbindModel(array('belongsTo' => array('UserType', 'Institution')));

            $userCount = $userModel->find('count', array('conditions' => array('User.id' => $userId.' AND auth_id => 1')));

            $userFound =  ($userCount > 0) ? true : false;

            }

        return $userFound;


    }
}