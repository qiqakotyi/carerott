<?php ?>
<div class="institutions index">

	<div class="row">
		<div class="col-md-9">
			<div class="page-header">
				<h3><?php echo __('Select Mentor'); ?></h3>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->

	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($mentors as $mentor): ?>
					<tr>
						<td >
							<?php 
								echo h($mentor['Users']['name']); 
							?>
						</td>
						<td>
							<span class="btn btn-success btn-sm right" id="student-register">
								<a class="white" href="<?php echo $this->webroot.'friends/add/'.$mentor['Users']['id']; ?>">
									Request mentor
								</a>
							</span>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div> <!-- end col md 9 -->
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
</div>
<!-- end containing of content -->
