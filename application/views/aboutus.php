<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("_partials/navbar.php") ?>

    <div class="container">
    <div class="wrapper">
    <h1 align="center">About Us</h1>
    <div class="row">
    <div class="card-deck mx-auto" style="width: 100%">
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url('upload/agent/default.jpg') ?>" alt="Card image Anas">
          <div class="card-body">
            <h5 class="card-title text-center">M. Anas Alqoyyum</h5>
            <p class="card-text text-center">24060117130082</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url('upload/agent/default.jpg') ?>" alt="Card image ilman">
          <div class="card-body">
            <h5 class="card-title text-center">Khoirunnisa Nurul Falah</h5>
            <p class="card-text text-center">24060117140079</p>
          </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="<?php echo base_url('upload/agent/default.jpg') ?>" alt="Card image Iqbal">
            <div class="card-body">
              <h5 class="card-title text-center">Varian Muhammad Jatnika</h5>
              <p class="card-text text-center">24060117140050</p>            
            </div>
          </div>
          <div class="card">
              <img class="card-img-top" src="<?php echo base_url('upload/agent/default.jpg') ?>" alt="Card image Ikhsan">
              <div class="card-body">
                <h5 class="card-title text-center">Taufiqurrahman Al Hammamy</h5>
                <p class="card-text text-center">24060117130056</p>
              </div>
            </div>
      </div> 
    </div>
    </div>
    </div>
    <footer>
        <?php $this->load->view("_partials/footer.php") ?>
    </footer>
</body>
</html>