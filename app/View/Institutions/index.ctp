<?php ?>
<div class="institutions index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Select Institutions'); ?></h1>
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
				<?php foreach ($institutions as $institution): ?>
					<tr>
						<td >
							<a href="<?php echo $this->webroot.'institutions/mentors/'.$institution['Institution']['id']; ?>">
								<?php echo h($institution['Institution']['name']); ?>
							</a>
							
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->
