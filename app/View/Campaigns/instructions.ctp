<?php
    $session_user = json_decode($this->Session->read("Auth.userdata"),1);
?>

This is how you make a payment.<br/>

Please make a payment before you can be able to create a campaign.<br/>

Please click below to make your online, payment.<br/>

<?php echo $this->Html->link('Make Payment', array('controller' => 'campaigns', 'action' => 'payments'), array('class' => 'btn-default')); ?>