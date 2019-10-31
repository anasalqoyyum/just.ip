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

						<form action="<?php base_url('admin/agent/edit') ?>" method="post" enctype="multipart/form-data" >
						<input type="hidden" name="id" value="<?php echo $agent->id_agent?>" />

							<div class="form-group">
								<label for="name">Nama</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" value="<?php echo $agent->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No Hp</label>
								<input class="form-control <?php echo form_error('nohp') ? 'is-invalid':'' ?>"
								 type="text" name="nohp" placeholder="No Hp" value="<?php echo $agent->nohp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nohp') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Alamat</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat" value="<?php echo $agent->alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Kota</label>
								<input class="form-control <?php echo form_error('kota') ? 'is-invalid':'' ?>"
								 type="text" name="kota" placeholder="Kota" value="<?php echo $agent->kota ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kota') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Email</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="Email" value="<?php echo $agent->email ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Image</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $agent->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Deskripsi"><?php echo $agent->description ?>"</textarea>
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