// jquery for sending the data to the database;

$(document).ready(function(){
   $('#senddata').click(function(e){
    e.preventDefault();
    // $fname= document.querySelector('#first_name').val;
    // $mnemes = document.querySelector('#middle_name').val;
    // $last= document.querySelector('#last_name').val;
    $.ajax({
        method:"POST",
        url:"send.php",
        // data:{ 
        //    firstname:"$fname",
        //    mnamess:"$mnemes",
        //    lastnames:"$last",
        // },
        data:$('#formData').serialize(),
        success:function(response){
            alert(response);
        }
    })
    })
});