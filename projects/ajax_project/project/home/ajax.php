<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjaxDataInsertion</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    
</head>
<body>
      <!-- The main Body -->
      <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>Data insertion using Ajax</h3></div>
                    <div class="card-body">
                        <form id="insertdata" method="post">
                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">firstname</label>
                            <div class="col-md-6">
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                        </div>
                            <div class="row mb-3">
                                <label for="middlename" class="col-md-4 col-form-label text-md-end">Middlename</label>
                                <div class="col-md-6">
                                    <input type="text" name="midle_name" id="midle_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Lastname" class="col-md-4 col-form-label text-md-end">LastName</label>
                                <div class="col-md-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control">
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
<!-- Jquery Link -->
<script src="../assets/jquery/jquery-3.6.3.min.js"></script>
<!-- javascript links -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/scripts.js"></script>
<script src="./data.js"></script>
</body>
</html>