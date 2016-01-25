<div class="landing-page adminLogin">
    <div class="row">
        <div class="col-md-12 login">
            <div class="form">
                <div class="tab-content">
                    <div id="login" class="alogin">
                        <h1>Client Login</h1>

                        <?php echo $this->Form->create('User', array('role' => 'form',"controller"=>"user","action"=>"admin_login")); ?>

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
                </div>
            </div>
        </div>
    </div>
</div>