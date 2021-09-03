<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row">

				<!-- Area Chart -->
				<div class="col-xl-12 col-lg-12">
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Tambah data</h6>
							<a href="/data-admin/restdata" class="btn btn-outline-primary btn-sm"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
						</div>
						<!-- Card Body -->
						<div class="card-body">

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
										<button type="submit" class="btn btn-primary mt-2">Submit</button>
										<?php echo form_close(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
