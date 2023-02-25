$(document).ready(function () {
  // Adding data to the database;
  $('#saveStudent').click(function (e) {
    e.preventDefault();
    // Inserting data to the database;
    $.ajax({
      method: "POST",
      url: "codes.php",
      data: $('#dataCollection').serialize(),
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if (res.status == 200) {
          //alert(res.message);
          $('#errorMessage').addClass('d-none');
          $('#addStudent').modal('hide');
          $('#dataCollection')[0].reset();
          $('#myTable').load(location.href + " #myTable");
        }
        else if (res.status == 500) {
          //alert(res.message);
          $('#errorMessage').removeClass('d-none');
          $('#errorMessage').text(res.message);
        }
        else if (res.status == 422) {
          //alert(res.message);
          $('#errorMessage').removeClass('d-none');
          $('#errorMessage').text(res.message);
        }
      }
    });
  })
  // Getting the id from the database for Editing;
  $(document).on('click', '.editStudent', function () {

    var stude_id = $(this).val();
    //alert(stude_id);
    $.ajax({
      method: "GET",
      url: "codes.php?stude_id=" + stude_id,
      success: function (response) {
        var rest = jQuery.parseJSON(response);
        if (rest.status == 200) {
          $('#first_name').val(rest.data.firstname);
          $('#student_id').val(rest.data.id);
          $('#middle_name').val(rest.data.mname);
          $('#last_name').val(rest.data.lastname);
          $('#course_name').val(rest.data.course);
          $('#studentEditModal').modal('show');
        }
        else if (rest.status == 404) {
          alert(rest.message);
        }
      }
    });
  });
  // Editing and updating the students from the database;
  $(document).on('submit', '#updateStudent', function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    formData.append("update_student", true);
    $.ajax({
      type: "POST",
      url: "codes.php",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        var res = jQuery.parseJSON(response);
        if (res.status == 422) {
          // alert(res.message);
          $('#errorMessageupdate').removeClass('d-none')
          $('#errorMessageupdate').text(res.message);
        }
        else if (res.status == 200) {
          $('#errorMessageupdate').addClass('d-none');
          $('#studentEditModal').modal('hide');
          $('#updateStudent')[0].reset();
          alertify.set('notifier','position', 'top-right');
          alertify.success(res.message);
          $('#myTable').load(location.href + " #myTable");
        }
      }
    });


  });

  // Deleting the record from the database;
  $(document).on('click', '.deleteStudent', function (e) {
    e.preventDefault();
    if(confirm('are sure you want to delete this record?')){
      //alert('yes the record deleted');
      var student_id = $(this).val();
      //alert(student_id);
      $.ajax({
        method: "POST",
        url: "codes.php",
        data: {
          'students_id': true,
          'student_id': student_id
        },
        success: function (response) {
          var jibu = jQuery.parseJSON(response);
          if(jibu.status == 500){
            alert(jibu.message);
          }
          else if(jibu.status==404){
            alert(jibu.message);
          }
          else if(jibu.status==200){
            //alert(jibu.message);
            $('#myTable').load(location.href + ' #myTable');
          }
        }
      });
    }
    
  });

});