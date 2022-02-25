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
				<div class="card mt-4 mb-4">
					<div class="card-body">
						<div class="col-md-12">
							<h4>Selamat Datang <span class="text-primary"><?php echo $this->session->userdata('username') ; ?></span></h4>
							<br>
							<p>
								Ini adalah Halaman Rahasia
							</p>

							<div class="mt-4 mb-4 text-end">
								<a class="btn btn-danger" href="<?php echo base_url() ; ?>user/logout">Logout</a>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>