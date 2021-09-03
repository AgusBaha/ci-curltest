	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo $this->session->flashdata('message'); ?>
				<?php echo form_open('data-admin/restdata/store'); ?>
				<div class="form-group">
					<label for="Name">Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
					<?php echo form_error('name'); ?>
				</div>
				<div class="form-group">
					<label for="job">Job</label>
					<input type="text" class="form-control" id="job" name="job" placeholder="Enter job" required>
					<?php echo form_error('job'); ?>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
