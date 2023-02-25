$(document).ready(function () {
   $('#sendData').click(function (e) { 
    e.preventDefault();
    
      $.ajax({
        method: "POST",
        url: "datasend.php",
        data: $('#datacollection').serialize(),
        success: function (response) {
            //alert(response);
            var resp = jQuery.parseJSON(response);
            if(resp.status==200){
               alert(resp.message);
                //$('#errorMessage').addClass('d-none');
                $('#datacollection')[0].reset();
            }
            else if(resp.status==500){
                alert(resp.message);
            }
            else if(resp.status==422){
                alert(resp.message);
            }
        }
      });
   });
});