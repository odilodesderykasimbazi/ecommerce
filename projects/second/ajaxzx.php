<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>BootrapwthPoup</title>
</head>

<body>
    <div class="container mt-5 px-5 my-5">
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4>The ajax again</h4>
                        <div class="alert alert-warning d-none" id="errorMessage"></div> 
                    </div>           
                    <form id="datacollection" method="post">
                    <div class="card-body">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Last name</label>
                         <input type="text" class="form-control" name="lastname" id="lastname">
                    </div>
                    <button type="submit" id="sendData" name="sendData" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Jquery Cdn Link -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./aps.js"></script>
</body>

</html>