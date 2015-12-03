<?php ?>
<div class="institutions index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('My Mentors'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->

	<div class="row">
		<div class="col-md-12">
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
							<a class="" href="<?php echo $this->webroot.'Topics/index/'.$mentor['Users']['id'].'/'.base64_encode($mentor['Users']['name']) ?>">
								<?php 
									echo h($mentor['Users']['name']); 
								?>
							</a>
						</td>
						<td >
							<a class="" href="<?php echo $this->webroot.'friends/add/'.$mentor['Users']['id']; ?>">
								<?php 
									echo h($mentor['Institution']['name']); 
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
