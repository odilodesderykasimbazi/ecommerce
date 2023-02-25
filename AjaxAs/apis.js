// The function to add user to the database.

$(document).ready(function(){
$('#senddata').click(function(e){
 e.preventDefault();
//  $first = document.querySelector('#first_name').val;
//  $m = document.querySelector('#middle_name').val;
//  $third = document.querySelector('#last_name').val;

 $.ajax({
    method:"POST",
    url: "http://localhost/projects/rest_api/newFolder/data.php",
    // data:{
    //     firsts:$first,
    //     second:$m,
    //     last:$third
    // },
    data:$('#formData').serialize(),
    success:function(res){
        alert(res);
    }
 })
})
});