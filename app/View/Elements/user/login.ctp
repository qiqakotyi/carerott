<?php ?>
<!-- <div class="col-md-10">
	<?php echo $this->Form->create('User', array('role' => 'form',"controller"=>"user","action"=>"login")); ?>
		<div class="form-group">
			<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->submit(__('Login'), array('class' => 'btn btn-default')); ?>
		</div>
	<?php echo $this->Form->end() ?>
</div> -->
<!-- end col md 10 -->

<div class="form">

	<ul class="tab-group">
		<li class="tab active"><a href="#signup">Sign Up</a></li>
		<li class="tab"><a href="#login">Log In</a></li>
	</ul>

	<div class="tab-content">
		<div id="signup">   
<!-- <div class="page-header">
				<h2><?php echo __('Register'); ?></h2>
			</div> -->
			<?php echo $this->Form->create('User', array('role' => 'form','controller'=>"user", "action"=>"add")); ?>

				<div class="row">
					<div class="col-sm-6  field-wrap">
						<!-- <label>
							First Name<span class="req">*</span>
						</label>
						<input type="text" required autocomplete="off" /> -->
						<?php echo $this->Form->input('Name', array('class' => ''));?>
					</div>

					<div class=" col-sm-6 field-wrap">
						<!-- <label>
							Last Name<span class="req">*</span>
						</label>
						<input type="text"required autocomplete="off"/> -->
						<?php echo $this->Form->input('email address', array('class' =>''));?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 field-wrap">
					<!-- <label>
						Email Address<span class="req">*</span>
					</label>
					<input type="email"required autocomplete="off"/> -->
					<?php echo $this->Form->input('password', array('class' => ''));?>
				</div>

				<div class="col-sm-6  field-wrap">
					<?php echo $this->Form->input('password_confirm', array('class' => '', "type"=>"password","autocomplete"=>"off"));?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 field-wrap">
				<?php echo $this->Form->input('fieldofstudies_id', array('class' => 'form-control'));?>
				</div>
				<div class="col-sm-6 field-wrap">
						<?php echo $this->Form->input('user_types_id', array('class' => 'form-control'));?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12  field-wrap">
					<?php echo $this->Form->input('institutions_id', array('class' => 'form-control'));?>
				</div>

			</div>
				<!-- <div class="row">
					<div class="col-xs-6">
						<div class="checkbox checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<label for="inlineCheckbox1">Mentor </label>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="checkbox checkbox-inline mentee">
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<label for="inlineCheckbox1">Mentee </label>
						</div>
					</div>
				</div> -->
				<!-- <button type="submit" class="button button-block"/>Get Started</button> -->
				<?php echo $this->Form->submit(__('Submit'), array('class' => 'button  button-block')); ?>

			<?php echo $this->Form->end() ?> <!-- /form -->

		</div>

		<div id="login">   
			<h1>Welcome Back!</h1>

			<?php echo $this->Form->create('User', array('role' => 'form',"controller"=>"user","action"=>"login")); ?>

				<div class="field-wrap">
					<?php echo $this->Form->input('email', array('class' => '' ,"autocomplete"=>"off"));?>
				</div>

				<div class="field-wrap">
					<?php echo $this->Form->input('password', array('class' => '',"type"=>"password","autocomplete"=>"off"));?>
				</div>

				<p class="forgot"><a href="#">Forgot Password?</a></p>

				<!-- <button class="button button-block"/>Log In</button> -->
				<?php echo $this->Form->submit(__('Login'), array('class' => 'button button-block')); ?>

			<?php echo $this->Form->end() ?> 

		</div>

	</div><!-- tab-content -->



