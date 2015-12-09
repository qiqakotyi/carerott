<?php

   echo $this->Form->create('Campaign', array(
       'role' => 'form',
       'inputDefaults' => array(
         'label' => false,
         'div' => 'form-group'
       )));

   echo $this->Form->input('Campaign.id', array('type' => 'hidden'));
   echo $this->Form->input('Campaign.user_id', array('type' => 'hidden'));

   echo $this->Form->input('Campaign.name', array('class' => "form-control" , 'placeholder' => "Name"));
   echo $this->Form->input('Campaign.campaign_url');

  echo $this->end('Submit');

?>