<?php ?>
<div class="topics index">

	<div class="row">
		<div class="col-md-9 ">
			<div class="page-header">
				<h3><?php echo __('Relationship guidelines'); ?></h3>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">
		<div class="col-md-3">

		</div>
		<div class="col-md-6 ">
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
							<span  href="#" data-target="#" role="button" class="btn btn btn-success btn-sm" id="message-mentor" target="_blank"> Message mentor </span>
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

		</div> <!-- end col md 6 -->
		<div class="col-md-3">
			<!-- SIDEBAR MENU -->
			<div class="right-col-campaigns">
				<ul class="nav">
					<li><h5>Campaigns to follow</h5></li>
					<li>
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.ab4ec33f73214445796a87ce54aee452.en.html#_=1450124941980&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=mandeladay&amp;show_count=false&amp;show_screen_name=true&amp;size=m" style="position: static; visibility: visible; width: 135px; height: 20px;" data-screen-name="mandeladay"></iframe>
					</li>
					<li>  
						<iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.ab4ec33f73214445796a87ce54aee452.en.html#_=1450124941981&amp;dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=StandardBankZA&amp;show_count=false&amp;show_screen_name=true&amp;size=m" style="position: static; visibility: visible; width: 159px; height: 20px;" data-screen-name="StandardBankZA"></iframe>
					</li>
					<li>  
						<iframe id="twitter-widget-2" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.ab4ec33f73214445796a87ce54aee452.en.html#_=1450124941982&amp;dnt=false&amp;id=twitter-widget-2&amp;lang=en&amp;screen_name=FNBSA&amp;show_count=false&amp;show_screen_name=true&amp;size=m" style="position: static; visibility: visible; width: 112px; height: 20px;" data-screen-name="FNBSA"></iframe>
					</li>
					<li>  
						<iframe id="twitter-widget-3" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.ab4ec33f73214445796a87ce54aee452.en.html#_=1450124941984&amp;dnt=false&amp;id=twitter-widget-3&amp;lang=en&amp;screen_name=TelkomZA&amp;show_count=false&amp;show_screen_name=true&amp;size=m" style="position: static; visibility: visible; width: 126px; height: 20px;" data-screen-name="TelkomZA"></iframe>
					</li>
					
				</ul>
			</div>
			<!-- END MENU -->
		</div>
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
