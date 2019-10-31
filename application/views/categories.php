<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("_partials/navbar.php") ?>

    <div class="container">
    <div class="search">
        <h1 align="center">Semua Agent</h1>
    <div class="row">
    <?php foreach ($agent as $agent): ?>
        <div class="col-md-3">
        <div class="card text-center" style="width: 16rem;">
            <img src="<?php echo base_url('upload/agent/'.$agent->image) ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $agent->nama ?></h5>
                <p class="card-text"><?php echo $agent->kota ?></p>
                <?php echo anchor ('result/detail/'.$agent->id_agent,'<div class="btn btn-primary">Detail</div>') ?>
                <!-- <a href="#" class="btn btn-primary">Detail</a> -->
            </div>
        </div>
        </div>
    <?php endforeach; ?>
    </div>
    </div>
    </div>
    <footer>
        <?php $this->load->view("_partials/footer.php") ?>
    </footer>
</body>
</html>