<div class="col-md-4">
    <div class="page-title">
        <h4>Campaigns</h4>
    </div>
    <div class="container">
        <?php if(!empty($campaigns)): ?>
            <?php foreach($campaigns as $campaign): ?>
                <?php
                    $id = $campaign['Campaign']['id'];
                ?>
                <div class="campaign">
                    <a class="open-campaign" href="<?php echo $this->webroot.'campaigns/campaign?id='.$id; ?>" >
                        <div class="logo"></div>
                        <div class="name"><?php echo $campaign['Campaign']['name']; ?></div>
                        <div class="originator"><?php //echo $campaign['Campaign']['author']; ?></div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="empty notification">
                <p>Sorry For the inconvenience but we have not yet published any campaigns yet.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
