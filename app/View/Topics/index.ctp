<?php ?>
<div class="topics index">

	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			<div class="page-header">
				<h2><?php echo __('Relationship guidelines'); ?></h2>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('Stages'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($topics as $topic): ?>
					<tr>
						<td><?php echo h($topic['Topic']['id']); ?>&nbsp;</td>
						<td><?php echo h($topic['Topic']['name']); ?>&nbsp;</td>
						<td>
							<span  href="/cakephp/carerott/index.js" data-target="/cakephp/carerott/index.js" role="button" class="btn btn btn-success btn-sm" id="message-mentor" target="_blank"> Message mentor </span>
							<!-- <span id="modal-367580" href="#modal-container-367580" role="button" class="btn btn btn-success btn-sm" data-toggle="modal" id="student-register"> Message mentor </span> -->
						</td>

					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="modal fade" id="modal-container-367580" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								×
							</button>
							<h4 class="modal-title" id="myModalLabel">
								Send message
							</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<?php echo $this->Form->input('message', array('class' => 'form-control', 'placeholder' => 'Name', "type"=>"textarea"));?>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">
								Close
							</button> 
							<button type="button" class="btn btn-primary" data-dismiss="modal">
								Send message
							</button> 
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
</div>
