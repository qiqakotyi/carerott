			<?php ?>
			<div id="loader-wrapper">

				<div id="loader">
				</div>
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>

			</div>
			<div class="landing-page selection-container">
				
				<div class="row">
					<div class="col-md-12 login">
						<!-- <h3 class="text-primary">Login to your Carerott existing account</h3> -->
						<?php echo $this->element('user/login'); ?>
					</div>
					
					<!-- <div class="col-md-6">
						<ul class="thumbnails"> 
							<div class="col-md-6"> 
								<div class="thumbnail"> <img src="app/webroot/img/St_Bons_Black_Blazer.jpg" alt="ALT NAME" class="img-responsive" /> 
									<div class="caption"> <h4>Highschool Student</h4> <p>Description</p> <p align="center"><span class="btn btn-primary btn-block" id="student-register">Student</span> </p>
									</div> 
								</div> 
							</div> 
							<div class="col-md-6"> <div class="thumbnail"> <img width="217" height="145" src="app/webroot/img/asian-graduate.jpg" alt="ALT NAME" class="img-responsive" /> 
								<div class="caption"> <h4>University Student</h4> <p>Description</p> 
									<p align="center"><span class="btn btn-primary btn-block" id="mentor-register">Mentor</span> </p> 
								</div> 
							</div>
						</div>
					</ul>

				</div> -->
				</div>
</div>
			<div class="signup-form new-userform">
				<?php echo $this->element('user/add'); ?>
			</div>

