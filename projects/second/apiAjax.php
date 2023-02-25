<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>BootrapwthPoup</title>
    <?php
    // datasend.php.

    // The database details
     $conss = mysqli_connect('localhost','root','','exdb');
        if(!$conss){
    die(mysqli_error($conss));
}
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
if(!empty($fname) && !empty($lname)){
$sql = "insert into extb(fnames, lnames) values('$fname','$lname')";
$sql_run = mysqli_query($conss,$sql);
if($sql_run){
    //echo "The data inserted to the database";
    $res = [
        'status' => 200,
        'message' => 'The data inserted succesfully'
    ];
    echo json_encode($res);
}else{
    //echo "The data not inserted to the database";
    $res = [
     'status' => 500,
     'message' => 'The data not inserted to the database'
    ];
    echo json_encode($res);
}
}
else{
    //echo "The field are empty";
    $res =[
        'status' =>422,
        'message' => 'The field input are empty'
    ];
    echo json_encode($res);
}
    ?>
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
    <script>
    $(document).ready(function() {
        $('#sendData').click(function(e) {
            e.preventDefault();

            $.ajax({
                method: "POST",
                url: "datasend.php",
                data: $('#datacollection').serialize(),
                success: function(response) {
                    //alert(response);
                    var resp = jQuery.parseJSON(response);
                    if (resp.status == 200) {
                        alert(resp.message);
                        //$('#errorMessage').addClass('d-none');
                        $('#datacollection')[0].reset();
                    } else if (resp.status == 500) {
                        alert(resp.message);
                    } else if (resp.status == 422) {
                        alert(resp.message);
                    }
                }
            });
        });
    });
    </script>
</body>

</html>