<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/header.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrump.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/agent/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/agent/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No Hp</label>
								<input class="form-control <?php echo form_error('nohp') ? 'is-invalid':'' ?>"
								 type="text" name="nohp" placeholder="No Hp" />
								<div class="invalid-feedback">
									<?php echo form_error('nohp') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Alamat</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Kota</label>
								<input class="form-control <?php echo form_error('kota') ? 'is-invalid':'' ?>"
								 type="text" name="kota" placeholder="Kota" />
								<div class="invalid-feedback">
									<?php echo form_error('kota') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Email</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="Email" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Image</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Deskripsi"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>