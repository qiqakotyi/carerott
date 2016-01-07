<div class="col-md-12">
    <div>
        <h4 style="color: maroon;">Campaign list</h4>
        <?php echo $this->Html->link('Create new', array('controller' => 'campaigns', 'action' => 'create'), array('class' => 'btn-default')); ?>
    </div>
    <br />
    <?php if(!empty($campaigns)): ?>
        <table  class="table-striped">
            <thead>
            <tr>
                <th>Campaign</th>
                <th>type</th>
                <th>Created</th>
                <th>Modified</th>
                <th>Expiry Date:</th>

                <th>Actions</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($campaigns as $campaign): ?>
                <?php
                    $status = $campaign['Campaign']['active'];
                    if($status == 1) {
                        $status = "Published";
                    } else {
                        $status = "Unpublish";
                    }

                    $campaignType = $campaign['Campaign']['type'];
                     if($campaignType == 0) {
                         $type = "Canvas";
                     } else {
                         $type = "Custom Layout";
                     }
                ?>

                <tr>
                    <td><?php echo $campaign['Campaign']['name']; ?></td>
                    <td><?php echo $type; ?></td>
                    <td><?php echo $campaign['Campaign']['created']; ?></td>
                    <td><?php echo $campaign['Campaign']['modified']; ?></td>
                    <td><?php  ?></td>
                    <td>&nbsp;</td>
                    <td><?php echo $status; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No campaigns were found!</p>
    <?php endif; ?>
</div>