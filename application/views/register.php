<!DOCTYPE html>
<html>
<head>
	<title>System Login Sederhana Codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="col-md-12 mt-5 row justify-content-center">
			<div class="col-md-8">
				<div class="text-center">
					<h1>System Login Sederhana Codeigniter</h1>
					By : <a href="https://www.rullystudio.com">Rully Studio</a>
				</div>
				<div class="card-title mb-4 mt-4 text-primary">
					<?php echo $title ; ?>
				</div>
				<div class="card mt-4 p-4">
					<div class="card-body">
						<div class="col-md-12">
							<form method="post" action="<?php echo base_url() ; ?>user/proses_register">

								<div class="mb-3">
								  <label class="form-label">Nama Lengkap</label>
								  <input type="text" name="nama" class="form-control">
								</div>

								<div class="mb-3">
								  <label class="form-label">Username</label>
								  <input type="text" name="username" class="form-control">
								</div>

								<div class="mb-3">
								  <label class="form-label">Password</label>
								  <input type="password" name="password" class="form-control">
								</div>

								<div class="mt-4 row">
									<div class="col-md-6">
										Sudah punya akun ? <a href="<?php echo base_url() ; ?>user/login">login</a>
									</div>
									<div class="col-md-6 text-end">
										<button type="submit" class="btn btn-primary">Register</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>