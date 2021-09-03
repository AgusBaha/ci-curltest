<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message'); ?>
			<a href="/data-admin/restdata/create" class="btn btn-outline-info btn-small">Tambah</a>
			<table class="table table-hover">
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
								<img src="<?php echo $user->avatar; ?>" alt="image">
							</td>
							<td>
								<a href="/data-admin/restdata/update/<?php echo $user->id ?>" class="btn btn-sm btn-outline-warning">update</a>
								<a href="/data-admin/restdata/delete/<?php echo $user->id; ?>" class="btn btn-outline-danger btn-sm">delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
