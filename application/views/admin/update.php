<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	<title><?php echo $title; ?></title>
</head>

<body>
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
					<label for="first_name" class="col-form-label">first_name</label>
					<input type="text" class="form-control" id="first_name" name="first_name" <?php echo form_input('first_name', $users->first_name); ?> <span class="text-danger"><?php echo form_error('first_name') ?></span>
				</div>
				<?php echo form_submit('submit', 'Update', "class='btn btn-primary'"); ?>
				<?php echo anchor('/data-admin/restdata', 'Back', "class='btn btn-secondary'"); ?>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>
