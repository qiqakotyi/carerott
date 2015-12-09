<?php
/**
 * Created by PhpStorm.
 * User: phumlani
 * Date: 12/9/15
 * Time: 12:31 PM
 */
class Campaign extends AppModel{
    public $validation = array();

    public function getList($userId = null){
        $conditions = array('Campaign.user_id = Users.id AND Users.user_types_id = 3');

        if(!empty($userId)){
            $conditions[] = array('Campaign.user_id' => $userId);
        }

        $campaigns = $this->find('all', array(
            'joins'=> array(
                array('table'=> 'users',
                    'type'=> '',
                    'alias' => 'Users',
                    'conditions' => $conditions
                )
            )
        ));

        return !empty($campaigns) ? $campaigns : array();

    }

    public function valitadeUrl(){

    }
}