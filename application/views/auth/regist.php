<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="card shadow mb-4">
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Update</h6>
						</div>
						<div class="card-body">
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
													<div class="col-xs-12 mb-2">
														<div class="form-group">
															<input type="email" name="email" id="email" class="form-control" placeholder="Email" tabindex="2">
														</div>
													</div>
													<div class="col-xs-12 mb-2">
														<div class="form-group">
															<input type="password" name="password" id="password" class="form-control" placeholder="Password" tabindex="3">
														</div>
													</div>
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
						</div>
					</div>
				</div>
