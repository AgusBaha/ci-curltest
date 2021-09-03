<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<?php echo $this->session->flashdata('error'); ?>
							<?php echo form_open('Auth/Auth/Login', 'class="form-horizontal"'); ?>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo set_value('email') ?>">
								</div>
								<label for="password" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								</div>
								<div class="col-sm-10 col-sm-offset-2">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember"> Remember me
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<button type="submit" class="btn btn-primary btn-sm">Login</button>
									</div>
								</div>
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
