<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax tutorials</title>
    <!-- css link -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/custom.css">
<link rel="stylesheet" href="../assets/css/styles.css">   

</head>
<body>

       <!-- The main container -->
 <div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4>Data insertion into the database using ajax</h4></div>
                <div class="card-body">
                    <!-- The form for collection of the data -->
                    <form id="dataColletion" method="post">
                    <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">first name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" id="first_name" required autocomplete="firstname">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">middle name</label>
                             <div class="col-md-6">
                                <input type="text" class="form-control" name="middle_name" id="middle_name" required autocomplete="middle name">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="insertData" name="insertData" class="btn btn-primary">
                                   Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
    <!-- jquery Link -->
    <script src="../assets/jquery/jquery-3.6.3.min.js"></script>
    <!-- javascript link -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="./app.js"></script>

</body>
</html>