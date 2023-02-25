<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpApi</title>
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/styles.css">
        <link rel="stylesheet" href="./assets/css/custom.css">
</head>
<body>
    
<div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-warning text-center"><h4>This is addition using ajax</h4></div>
                    <div class="card-body">
                        <form id="formData" method="POST">
                            <div class="row mb-3">
                                <label for="firstname" class="col-md-4 col-form-label text-col-end">First Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="firstname" id="first_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="firstname" class="col-md-4 col-form-label text-col-end">Middle Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="middlename" id="middle_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="firstname" class="col-md-4 col-form-label text-col-end">last Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="lastname" id="last_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" name="senddata" id="senddata">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="./assets/jquery/jquery-3.6.3.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/scripts.js"></script>
<script src="./apis.js"></script>
</body>
</html>