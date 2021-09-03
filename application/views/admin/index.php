<div class="container mt-3">
	<div class="row">
		<div class="col-md-12">

			<div class="dropdown nav justify-content-end">
				<a class="btn btn-outline-info btn-sm mb-2 shadow dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
					Setting
				</a>

				<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<li><a class="dropdown-item" href="/Auth/Auth/Logout">Logout</a></li>
				</ul>
			</div>
			<?php echo $this->session->flashdata('message'); ?>
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="card shadow mb-4">
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Data</h6><a href="/data-admin/restdata/create" class="btn btn-outline-primary btn-sm mb-2 shadow justify-content-end"><i class="fas fa-plus"></i> Tambah</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover align-middle">
									<thead>
										<tr>
											<td>E-mail</td>
											<td>First Name</td>
											<td>Last Name</td>
											<td>Avatar</td>
											<td>Action</td>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($users as $user) : ?>
											<tr>
												<td>
													<?php echo $user->email; ?>
												</td>
												<td>
													<?php echo $user->first_name; ?>
												</td>
												<td>
													<?php echo $user->last_name; ?>
												</td>
												<td>
													​<picture>
														<img src="<?php echo $user->avatar; ?>" height="50px" width="50px" class="rounded-circle shadow" alt="...">
													</picture>
												</td>
												<td>
													<a href="/data-admin/restdata/update/<?php echo $user->id ?>" class="btn btn-sm btn-outline-warning"><i class="far fa-edit"></i></a>
													<a href="/data-admin/restdata/delete/<?php echo $user->id; ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
