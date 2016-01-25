<script>
    $( "#tabs" ).tabs();
</script>
<div class="row edit-profile dashboard">
    <h1>Dashboard</h1>
    <p>Welcome to the Admin Panel</p>
    <div class="col-md-12">
        <div class="container">
            <div id="tabs" class="admin-navigation">
                <ul class="admin-nav">
<!--                    <li><a class="current" href="#company">Company</a></li>-->
                    <li><a class="" href="#profile">My Profile</a></li>
                    <li><a class="" href="#campaigns">Our Campaigns</a></li>
                    <!--<li></li>-->
                </ul>
<!--                <div id="company" class="">-->
<!--                    <div class="content company">-->
<!--                        <div class="banner">-->
<!--                            --><?php //echo $this->Form->create('Company', array('url'=>array('controller'=>'company', 'action'=>'create'))); ?>
<!--                            <div class="form-group">-->
<!--                                --><?php //echo $this->Form->input('cname', array('class' => 'form-control', 'placeholder' => 'Company Name'));?>
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!---->
<!--                                --><?php //echo $this->Form->input('logo',array('type' => 'file','error' => false,'placeholder'=>'Upload Logo')); ?>
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                --><?php //echo $this->Form->input('banner',array('type' => 'file','error' => false,'placeholder'=>'Upload Banner')); ?>
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                --><?php //echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="company-name">-->
<!---->
<!--                        </div>-->
<!--                        <div class="description">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div id="profile">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="user-edit">
                                    <?php echo $this->Form->create('Users', array('url'=>array('controller'=>'users', 'action'=>'admin_create'))); ?>
                                        <h1>Client Details</h1>
                                    <div class="form-group col-lg-4">
<!--                                        <label>Name</label>-->
                                        <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name', 'label' => false));?>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <?php echo $this->Form->input('surname', array('class' => 'form-control', 'placeholder' => 'Surname', 'label' => false));?>
                                    </div>
                                    <div class="form-group col-lg-8">
                                        <?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email', 'label' => false));?>
                                    </div>
                                    <div class="form-group col-lg-8">
                                        <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password', 'label' => false));?>
                                    </div>

                                    <div class="form-group col-lg-8">
                                        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="campaigns">
                    <div class="content">
                        Campaign List
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>