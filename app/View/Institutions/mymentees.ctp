	<?php ?>
	<div class="institutions index">

		<div class="row">
			<div class="col-md-9 col-md-offset-2">
				<div class="page-header">
					<h2><?php echo __('My Mentees'); ?></h2>
				</div>
			</div><!-- end col md 12 -->
		</div><!-- end row -->

		<div class="row">
			<div class="col-md-9 col-md-offset-2 table-mentees">
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
							<th class="actions">Mentor</th>
							<th class="actions"> Institution</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($mentors as $mentor): ?>
						<tr>
							<td >
								<a class="" href="<?php echo $this->webroot.'/Topics/'?>">
									<?php 
										echo h($mentor['Users']['name']); 
									?>
								</a>
							</td>
							<td >
								<a class="" href="<?php echo $this->webroot.'friends/add/'.$mentor['Users']['id']; ?>">
									<?php 
										echo h("High school"); 
									?>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div> <!-- end col md 9 -->
		</div><!-- end row -->
	</div>
	<!-- end containing of content -->
