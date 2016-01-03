<div class="col-md-4">

    <h4 style="color: maroon;"><?php echo ucfirst($this->action); ?> campaign </h4>
    <?php echo $this->Form->create('Campaign', array('role' => 'form')); ?>

    <div class="form-group">
        <?php echo $this->Form->hidden('Campaign.id'); ?>
    </div>

    <div class="form-group">
        <?php echo $this->Form->hidden('Campaign.user_id'); ?>
    </div>
    
    <div class="form-group">
        <?php echo $this->Form->input('Campaign.name', array(
		    'class' => 'form-control', 'label' => array('text' => 'Campaign name')
		  ));
		?>
    </div>
    
    <div class="form-group">
        <?php echo $this->Form->input('Campaign.url', array(
		     'class' => 'form-control', 'label' => array('text' => 'Campaign url')
			));
		?>
    </div>
    
    <div class="form-group">
        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        <?php echo $this->Form->submit(__('Cancel'), array('class' => 'btn')); ?>
    </div>

    <?php echo $this->Form->end() ?>
</div>