<?php ?>
<div class="users form element-register">


	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h2><?php echo __('Register'); ?></h2>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-5">
			<?php echo $this->Form->create('User', array('role' => 'form','controller'=>"user", "action"=>"add")); ?>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password_confirm', array('class' => 'form-control', 'placeholder' => 'Confirm Password', "type"=>"password"));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fieldofstudies_id', array('class' => 'form-control', 'placeholder' => 'Field Of study Id'));?>
				</div>
				<div class="mentors-dd">

					<div class="form-group hidden">
						<?php echo $this->Form->input('user_types_id', array('class' => 'form-control', 'placeholder' => 'User Types Id'));?>
					</div>
					<div class="form-group">
						<?php echo $this->Form->input('institutions_id', array('class' => 'form-control', 'placeholder' => 'Institutions Id'));?>
					</div>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-success btn-default')); ?>
					
				</div>
				<div class="form-group">
					<button class="btn  btn-default" id="back-register"> Back </button>
				</div>

			<?php echo $this->Form->end() ?>
		</div><!-- end col md 5 -->

	</div><!-- end row -->

</div>
