<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>
<body>
    <!-- Modal -->
<div class="modal fade" id="studentAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- The form for the modal -->
     <form id="saveStudent" method="POST">
         <div class="modal-body">
            <div class="alert alert-warning d-none"></div>
        <div class="mb-3">
            <label for="fname">First Name</label>
            <input type="text" name="first_name" id="first_name" autocomplete="off" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="fname">middle Name</label>
            <input type="text" name="middle_name" id="middle_name" autocomplete="off" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="fname">Last Name</label>
            <input type="text" name="last_name" id="last_name" autocomplete="off" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="fname">course Name</label>
            <input type="text" name="course" id="course" autocomplete="off" class="form-control" />
        </div>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit"  id= "sendData" class="btn btn-primary">Add student</button>
          </div>
      </form>
      <!-- End of the form -->
    </div>
  </div>
</div>
<!-- End of the modal -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4>Ajax inserting the data to the database without the page reload using bootstrap
                    <button type="submit" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#studentAdd">
                            Add student
                         </button>
                    </h4></div>
                    <div class="card-body">
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="./assets/jquery/jquery-3.6.3.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/bootstraps.bundle.min.js"></script>
    <script src="./assets/js/scripts.js"></script>
    <script>

        // $(document).ready(function(){
        //     $('#sendData').click(function(e){
        //         e.preventDefault();
        //     $.ajax({
        //     method:"POST",
        //     url:"insert.php",
        //     data:$('#saveStudent').serialize(),
        //     processData:false,
        //     contentType:false,
        //     success:function(response){
        //         var res = $.parseJSON(response);
        //         if(res.status== 422){
        //             $('#errorMessage').removeClass('d-none');
        //             $('#errorMessage').text(res.message);
        //         }
        //         else if(res.status == 200){
        //             $('#errorMessage').addClass('d-none');
        //             $('#studentAdd').modal('hide');
        //             $('#saveStudent')[0].resset();
        //         }
        //     }
        //     });
        // });
            
            
           //var formData =new FormData(this);
           ///formData.append("save_student",true);
           $(document).ready(function(){
             $('#sendData').click(function(e){
                 e.preventDefault();
                 $.ajax({
                    method:"POST",
                   url:"send.php",
             data:$('#saveStudent').serialize(),
             processData:false,
             contentType:false,
             success:function(response){
                 //var res = jQuery.parseJSON(response);
            //    if(res.status == 422){
            //         $('#errorMessage').removeClass('d-none');
            //          $('#errorMessage').text(res.message);
            //     }
            //      else if(res.status == 200){
            //          $('#errorMessage').addClass('d-none');
            //          $('#studentAdd').modal('hide');
            //         $('#saveStudent')[0].resset();
            //      }
            console.log(response);
         }
                 })
             })
           });
        
       
    </script>
</body>
</html>