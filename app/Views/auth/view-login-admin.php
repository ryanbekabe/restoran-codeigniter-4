<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <form action="<?php echo base_url('login') ?>" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="header text-center">
                                <h3>LOGIN ADMIN</h3>
                            </div>
                            <div class="my-3">
                                <?php echo session()->getFlashdata('pesan') ?>
                            </div>
                            <div class="form-group">
                                <label for=""> EMAIL </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email anda ..." >
                            </div>
                            <div class="form-group">
                                <label for=""> PASSWORD </label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password anda ...">
                            </div>
                            <input type="submit" value="LOGIN" name="login-admin" class=" col-12 btn btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>    
</body>
</html>