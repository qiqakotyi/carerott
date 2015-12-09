<?php
/**
 * Created by PhpStorm.
 * User: phumlani
 * Date: 12/9/15
 * Time: 3:38 PM
 */
class CampaignAccessComponent extends Component{


    public function __contsruct(ControllerCollection $collection, $settings = array()){

        $settings = array_merge($this->settings, (array)$settings);
        $this->Controller = $collection->getController();

        parent::__construct($collection, $settings);

    }

    public function isAllowed($userId){
        $userFound = false;

        if(!empty($userId)) {

            $userModel = $userFound = ClassRegistry::init('User');

            $userModel->unbindModel(array('belongsTo' => array('UserType', 'Institution')));

            $userCount = $userModel->find('all', array('conditions' => array('User.id' => $userId.' AND auth_id => 1')));

            $userFound =  ($userCount > 0) ? true : false;

            }

        return $userFound;


    }
}