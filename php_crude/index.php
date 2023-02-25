<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude Operation</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>
<body>
      <div class="container my-5">
        <div class="row justify-content-center">
             <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-center"><h4>Crud operation in php</h4></div>
                    <div class="card-body">
                    <form action="insert.php" method="POST">
                    <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">first name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="middle name" class="col-md-4 col-form-label text-md-end">middle name</label>
                             <div class="col-md-6">
                                <input type="text" class="form-control" name="middle_name" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Last naem" class="col-md-4 col-form-label text-md-end">Last name</label>
                             <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Course" class="col-md-4 col-form-label text-md-end">Course</label>
                             <div class="col-md-6">
                                <input type="text" class="form-control" name="course" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button name="insertData" class="btn btn-primary">
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
</body>
</html>