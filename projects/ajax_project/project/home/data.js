$(document).ready(function(){
   $('#senddata').click(function(e){
    e.preventDefault();

    // ajax call. Here we get all the data from the form.
    $.ajax({
        method:"POST",
        url:"data.php",//Here this is the url which sends the data to the database
        data:$('#insertdata').serialize(),//here we include the form data.
        success:function(response){
            alert(response);
        }
    })
   })
});