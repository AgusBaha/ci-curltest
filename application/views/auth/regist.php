<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<a href="#" id="login">Login</a>
						</div>
						<div class="col-xs-6">
							<a href="#" id="register-form-link">Register</a>
						</div>
						<?php echo form_open('/Auth/Auth/Register', 'class="form-horizontal"'); ?>
						<!-- <div class="col-xs-12">
							<div class="form-group">
								<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="1">
							</div>
						</div> -->
						<div class="col-xs-12">
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control" placeholder="Email" tabindex="2">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control" placeholder="Password" tabindex="3">
							</div>
						</div>
						<!-- <div class="col-xs-12">
							<div class="form-group">
								<input type="passowrd" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirm Passoword" tabindex="4">
							</div>
						</div> -->
						<div class="col-xs-12">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6 col-sm-offset-3">
										<input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-primary" value="Register Now">
									</div>
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
