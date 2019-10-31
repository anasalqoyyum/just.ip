<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo site_url('overview') ?>"><img src="<?php echo base_url('assets/img/logo.png') ?>"></a>
            <button class="navbar-toggler fas fa-bars" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-right">
                    <li class="nav-item=">
                        <a class="nav-link" href="<?php echo site_url('overview') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('categories') ?>">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('aboutus') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('contact') ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
    <div class="container">
        <div class="row ml-auto">
            <div class="col-sm-1">
                <a href="<?php echo site_url('login') ?>"><button type="button" class="btn btn-outline-warning">Login</button></a>
            </div>
            <div class="col-sm-1">
                <a href="<?php echo site_url('register') ?>"><button type="button" class="btn btn-warning">Register</button></a>
            </div>
        </div>
    </div>