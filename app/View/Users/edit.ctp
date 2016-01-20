<div class="row edit-profile"> 
    <!-- <h3><?php echo __('Edit Profile'); ?></h3> --> 
    <!-- <hr> --> 
     	<!-- left column --> 
    <div class="col-md-3 left-col">
         		<!-- <div class="text-center">
         			<img src="//placehold.it/150" class="avatar img-circle" alt="avatar"> 
        			<h6>Upload a different photo...</h6>  
        						<input type="file" class="form-control"> 
        			</div> --> 
        <div class="profile-sidebar"> 
            <!-- SIDEBAR USERPIC --> 
            <div class="profile-userpic"> 
                <img src="../../img/wara.jpg" class="img-responsive" alt=""> 
            </div>
             <!-- END SIDEBAR USERPIC --> 
            <!-- SIDEBAR USER TITLE --> 
            <div class="profile-usertitle"> 
                <div class="profile-usertitle-name"> 
                    Lusindiso Qhushela 
                </div> 
                <div class="profile-usertitle-job">
                     Operations Manager
                </div> 
            </div>
             <!-- END SIDEBAR USER TITLE --> 
            <!-- SIDEBAR BUTTONS --> 
            <div class="profile-userbuttons"> 
                <button type="button" class="btn  btn-sm btn-follow">Follow</button> 
                <button type="button" class="btn  btn-sm btn-message">Message</button> 
            </div> 
            <!-- END SIDEBAR BUTTONS --> 
            <!-- SIDEBAR MENU --> 
            <div class="profile-usermenu"> 
                <ul class="nav"> 
                    <li class="active"> 
                        <a href="Home.html"> 
                            <i class="glyphicon glyphicon-home"></i> 
                            Home
                        </a> 
                    </li> 
                    <li> 
                        <a href="#"> 
                            <i class="glyphicon glyphicon-user"></i> 
                            Account Settings
                        </a> 
                    </li> 
                    <li> 
                        <a href="#" target="_blank"> 
                            <i class="glyphicon glyphicon-ok"></i> 
                            Tasks
                        </a> 
                    </li> 
                    <li> 
                        <a href="#"> 
                            <i class="glyphicon glyphicon-flag"></i> 
                            Help
                        </a>
                    </li>  
                </ul> 
            </div> 
            <!-- END MENU -->
        </div> 
    </div>  
    <!-- edit form column --> 
    <div class="col-md-6 personal-info mid-col"> 
        <div class="row">
            <div class="col-md-6"> 
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
        </div> 
    </div> 
    <div class="col-md-3 right-col"> 
        <div class="profile-sidebar">  
            <!-- SIDEBAR MENU --> 
            <div class="right-col-campaigns"> 
                <ul class="nav"> 
                    <?php if(isset($campaigns)): ?>
                        <li><h5>Campaigns to follow</h5></li> 
                        <?php foreach($campaigns as $campaign ): ?>
<!--                            --><?php //  $id = $campaign['Campaign']['id'];  ?>
                            <li class="">
                                <?php echo $this->Html->link(__('<span class="glyphicon"></span>'.$campaign['Campaign']['name']), array('controller' => 'campaigns', 'action' => 'campaigns'), array('escape' => false)); ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
             <!-- END MENU --> 
        </div>
    </div> 
</div> 