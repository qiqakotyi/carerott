<?php ?>
<div class="institutions index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Select Mentor'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->

	<div class="row">
		<div class="col-md-12">
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
	</div><!-- end row -->
</div>
<!-- end containing of content -->
