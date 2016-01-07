<?php if(!empty($campaign)): ?>
    <?php foreach($campaign as $campaigOne): ?>
        <?php
            $campaignUrl = $campaigOne['Campaign']['url'];
            $name = $campaigOne['Campaign']['name'];
        ?>
    <?php endforeach; ?>
<?php endif; ?>
<div class="container">
<!--    frameborder="0"-->

<!--    --><?php //echo $campaignUrl; ?>
    <iframe src="http://www.w3schools.com" height="1024" width="100%" frameborder="0"></iframe>

    <div class="commet-box">
        <div id="fb-root"></div>
        <script src="http://connect.facebook.net/en_US/all.js#appId=871381076312251&xfbml=1"></script>
        <fb:comments xid="<?php echo $campaigOne['Campaign']['id']; ?>" width="960" title="<?php echo $name; ?>" publish_feed="false"></fb:comments>
    </div>

</div>