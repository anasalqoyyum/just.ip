<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/header.php") ?>
</head>

<body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php $this->load->view("admin/_partials/breadcrump.php") ?>
        <!-- Icon Cards-->

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/agent/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>No Hp</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Email</th>
                                        <th>Foto</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($agent as $agent): ?>
									<tr>
										<td width="150">
											<?php echo $agent->nama ?>
										</td>
										<td>
											<?php echo $agent->nohp ?>
                                        </td>
                                        <td>
											<?php echo $agent->alamat ?>
                                        </td>
                                        <td>
											<?php echo $agent->kota ?>
                                        </td>
                                        <td>
											<?php echo $agent->email ?>
                                        </td>
                                        <td>
											<img src="<?php echo base_url('upload/agent/'.$agent->image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($agent->description, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('admin/agent/edit/'.$agent->id_agent) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/agent/delete/'.$agent->id_agent) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                        
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

      <!-- Sticky Footer -->
        <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>
