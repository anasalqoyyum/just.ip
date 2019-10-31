<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("_partials/navbar.php") ?>

    <div class="container">
    <div class="wrapper">
    <div class="row">
        <div class="col-md-6">
            <div class="feature-box">
                <h1>Mau Beli Barang Dari Luar Kota? Kami Solusinya</h1>
                <p>Melalui agen kami yang ada di berbagai kota.</p>
                <form class="form-inline">
                    <input class="form-control form-control" type="search" placeholder="Search" aria-label="Search">
                    <a href="<?php echo site_url('result') ?>"><button class="btn btn-warning btn-lg fas fa-search" type="button"></button></a>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <img src="<?php echo base_url('assets/img/Mask Group 1.png') ?>" alt="Back" class="feature-img">
        </div>
    </div>
    </div>
    </div>
    <footer>
        <?php $this->load->view("_partials/footer.php") ?>
    </footer>
</body>
</html>