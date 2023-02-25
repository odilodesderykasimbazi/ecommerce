<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('header.php');
    ?>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header">Login Form</div>
                <div class="card-body">
                    <form action="" method="Post">
                    <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" required autocomplete="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                             <div class="col-md-6">
                                <input type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">
                                      Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sweetalert.min.js"></script>
<script src="../assets/js/datatables-simple-demo.js"></script>
<script src="../assets/js/custom.js"></script>
</html>