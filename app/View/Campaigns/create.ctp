<div class="col-md-12">

    <h4 style="color: maroon;"><?php echo ucfirst($this->action); ?> campaign </h4>
    <?php echo $this->Form->create('Campaign', array('role' => 'form')); ?>
    <div id="tabs">
        <div class="col-md-4">
            <ul>
                <li><a href="#tab1">Canvas Campaign</a></li>
                <li><a href="#tab2">Custom Campaign</a></li>
            </ul>
        </div>
        <div class="col-md-7">
            <div id="tab1">
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

                <?php echo $this->Form->input('main_banner', array('type'=>'file')); ?>
            </div>
            <div id="tab2">
                This is a custom layout campaign.
            </div>
        </div>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default validate')); ?>
            <?php echo $this->Form->submit(__('Cancel'), array('class' => 'btn')); ?>
        </div>
    </div>
    <?php echo $this->Form->end() ?>
</div>