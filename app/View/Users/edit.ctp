<h2><?php echo __('Edit Profile'); ?></h2>
<hr>
<div class="row">
	<!-- left column -->
	<div class="col-md-3">
		<div class="text-center">
			<img src="//placehold.it/150" class="avatar img-circle" alt="avatar">
			<h6>Upload a different photo...</h6>

			<input type="file" class="form-control">
		</div>
	</div>

	<!-- edit form column -->
	<div class="col-md-4 personal-info">
		<?php
			//echo "<pre>";
			//print_r($this); exit;

		?>


		<h3>Personal info</h3>
		<?php echo $this->Form->create('User', array('role' => 'form')); ?>

		<div class="form-group">
			<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
		</div>

		<div class="form-group">
			<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('institutions_id', array('class' => 'form-control', 'placeholder' => 'Institutions Id'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
		</div>

		<?php echo $this->Form->end() ?>
	</div>
	<div class="col-md-3">
		<div class="sidebar">
			<div class="tabs">
					<ul>
						<li>
							<?php echo $this->Html->link(__('<span class="glyphicon"></span>Create Campaign'), array('controller' => 'campaigns', 'action' => 'create'), array('escape' => false)); ?>
						</li>
				 	</ul>
				 	<?php if(isset($campaigns)): ?>
				 		<h3>My Campaigns</h3>
				 	     <ul>
                    		<?php foreach($campaigns as $campaign ): ?>
                    		<?php
                    				$id = $campaign['Campaign']['id'];
                    		?>
									<li class="<?php echo $campaign['Campaign']['id']; ?>"><?php echo $this->Html->link(__('<span class="glyphicon"></span>'.$campaign['Campaign']['name']), array('controller' => 'campaigns', 'action' => 'add', $id), array('escape' => false)); ?></li>
                    		<?php endforeach; ?>
                    	 </ul
                    <?php else: ?>
                    	Error
                    <?php endif; ?>
			 </div>
		</div>
	</div>
</div>

