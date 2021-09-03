<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row">

				<!-- Area Chart -->
				<div class="col-xl-12 col-lg-12">
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Update</h6>
						</div>
						<!-- Card Body -->
						<div class="card-body">

							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<?php echo form_open('data-admin/restdata/update_store') ?>
										<?php echo form_hidden('id', $users->id); ?>
										<div class="form-group">
											<label for="email" class="col-form-label">E-mail</label>
											<input type="email" class="form-control" id="email" name="email" <?php echo form_input('email', $users->email); ?> <span class="text-danger"><?php echo form_error('email') ?></span>
										</div>
										<div class="form-group">
											<label for="first_name" class="col-form-label">first name</label>
											<input type="text" class="form-control" id="first_name" name="first_name" <?php echo form_input('first_name', $users->first_name); ?> <span class="text-danger"><?php echo form_error('first_name') ?></span>
										</div>
										<div class="mt-2">
											<?php echo form_submit('submit', 'Update', "class='btn btn-primary'"); ?>
											<?php echo anchor('/data-admin/restdata', 'Back', "class='btn btn-secondary'"); ?>
										</div>
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
