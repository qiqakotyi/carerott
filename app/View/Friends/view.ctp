<div class="friends view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Friend'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Friend'), array('action' => 'edit', $friend['Friend']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Friend'), array('action' => 'delete', $friend['Friend']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $friend['Friend']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Friends'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Friend'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Friend Statuses'), array('controller' => 'friend_statuses', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Friend Status'), array('controller' => 'friend_statuses', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($friend['Friend']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Friend Status'); ?></th>
		<td>
			<?php echo $this->Html->link($friend['FriendStatus']['name'], array('controller' => 'friend_statuses', 'action' => 'view', $friend['FriendStatus']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Student Id'); ?></th>
		<td>
			<?php echo h($friend['Friend']['student_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mentor Id'); ?></th>
		<td>
			<?php echo h($friend['Friend']['mentor_id']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

