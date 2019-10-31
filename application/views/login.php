<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>
<body id="page-top">
    <?php $this->load->view("_partials/navbar.php") ?>

    <div class="container">
    <div class="signin">
        <h1 align="center">Sign In</h1>
    <div class="row justify-content-center">
        <div class="shadow p-3 mb-5 bg-white rounded">
        <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
           <?php echo $this->session->flashdata('msg');?>
                <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    <footer>
        <?php $this->load->view("_partials/footer.php") ?>
    </footer>
</body>
</html>