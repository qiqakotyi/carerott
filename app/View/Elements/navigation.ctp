<?php
$session_user = json_decode($this->Session->read("Auth.userdata"),1);
?>
	<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php
				echo $this->Html->link(
					$this->Html->image('/img/logo.png', array('alt' => " alt", 'border' => '0',"class"=>"header-component-img")),
					array('controller'=>'users', 'action'=>'landing'), array('escape' => false));
					?>
					<!-- <a class="navbar-brand orange" href="#">Carerott</a> -->
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a class="white" href="<?php echo $this->webroot; ?>">
								Home
							</a>
						</li>

						<?php
						if($session_user){
							if($session_user['User']['user_types_id'] == 2){
								?>
								<li>
									<a class="white" href="<?php echo $this->webroot.'institutions/mymentors/'; ?>">
										My mentors
									</a>
								</li>
								<?php }} ?>
								<?php
								if($session_user){
									if($session_user['User']['user_types_id'] == 1){
										?>
										<li>
											<a class="white" href="<?php echo $this->webroot.'institutions/mymentees/'; ?>">
												My mentees
											</a>
										</li>
										<?php }} ?>
										<li>
											<a class="white" href="<?php echo $this->webroot.'users/contactus'; ?>">
												Contact Us
											</a>
										</li>
										<li>
											<a class="white" href="<?php echo $this->webroot.'users/terms'; ?>">
												Terms and conditions
											</a>
										</li>
										<?php if($session_user){ ?>
										<li>
											<a class="red" href="<?php echo $this->webroot.'users/logout'; ?>">
												Logout
											</a>
										</li>
										<?php }  ?>
									</ul>
								</div><!--/.nav-collapse -->
						</div>
