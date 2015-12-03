<div class="posts view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Post'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Post'), array('action' => 'edit', $post['Post']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Post'), array('action' => 'delete', $post['Post']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Posts'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Post'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Uuid'); ?></th>
		<td>
			<?php echo h($post['Post']['uuid']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User Uuid'); ?></th>
		<td>
			<?php echo h($post['Post']['user_uuid']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($post['Post']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($post['Post']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('File'); ?></th>
		<td>
			<?php echo h($post['Post']['file']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thumb'); ?></th>
		<td>
			<?php echo h($post['Post']['thumb']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($post['Post']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Deleted'); ?></th>
		<td>
			<?php echo h($post['Post']['deleted']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Groups Id'); ?></th>
		<td>
			<?php echo h($post['Post']['groups_id']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

