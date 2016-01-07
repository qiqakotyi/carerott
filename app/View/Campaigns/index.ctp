<div class="col-md-1">
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
        <th>Url</th>
        <th>Created</th>
        <th>Modified</th>
        <td>Actions</td>
       </tr>
      </thead>
      <tbody>
      <?php foreach($campaigns as $campaign): ?>
        <tr>
          <td><?php echo $campaign['Campaign']['name']; ?></td>
          <td><?php echo $campaign['Campaign']['url']; ?></td>
          <td><?php echo $campaign['Campaign']['created']; ?></td>
          <td><?php echo $campaign['Campaign']['modified']; ?></td>
          <td><?php echo ''; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>No campaigns were found!</p>
  <?php endif; ?>
</div>