<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("_partials/navbar.php") ?>

    <div class="container">
    <div class="agent">
    <div class="maincontent bg--white pt--80 pb--55">
            <div class="container">
                <div class="row">
                    <?php foreach($agent as $agent): ?>
                    <div class="col-lg-9 col-12">
                        <div class="wn__single__product">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="wn__fotorama__wrapper">
                                        <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                                <a href="1.jpg"><img src="<?php echo base_url('upload/agent/'.$agent->image) ?>" width="300" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="product__info__main">
                                        <h1><?php echo $agent->nama ?></h1>
                                        <div class="product-reviews-summary d-flex">
                                            <ul class="rating-summary d-flex" style="list-style-type:none;">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></i></li>
                                                <li class="off"><i class="fas fa-star"></i></i></li>
                                                <li class="off"><i class="fas fa-star"></i></i></li>
                                            </ul>
                                        </div>
                                        <div class="price-box">
                                            <span><?php echo $agent->nohp ?></span>
                                        </div>
                                        <div class="product__overview">
                                            <p>Alamat : <?php echo $agent->alamat ?></p>
                                            <p>Kota : <?php echo $agent->kota ?></p>
                                            <p>Email : <?php echo $agent->email ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__info__detailed">
                            <div class="pro_details_nav nav justify-content-start" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
                            </div>
                            <div class="tab__container">
                                <!-- Start Single Tab Content -->
                                <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                                    <div class="description__attribute">
                                        <p><?php echo $agent->description ?></p>
                                    </div>
                                </div>
                                <!-- End Single Tab Content -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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