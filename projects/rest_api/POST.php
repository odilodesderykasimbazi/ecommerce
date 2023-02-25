<!DOCTYPE html>
<html>
<head>
	<title>post</title>
	<style type="text/css">
		.container {
			margin: 0 auto;
			width: 50%;
			background-color: aliceblue;
		}
		h1 {
			border-bottom: 2px solid green;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Please Fill the form and click save to save records.</h1>
		<div class="container">
			<form method="post" action="saverecords.php" id="showstatus">
				<table width="100%">
					<tr><td></td></tr>
					<tr>
						<td>
							<label>Enter fulname:</label>&nbsp;
						</td>
						<td>
							<input type="text" name="fname" id="fname"><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>Enter email:</label>&nbsp;
						</td>
						<td>
							<input type="email" name="email" id="email"><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>&nbsp;</label>
						</td>
						<td>
							<input type="button" name="save" value="save" id="saverecords">
						</td>
					</tr>
				</table>
			</form>
			
		</div>
		
	</div>
      <!-- jquery ajax link -->
	<script src="ajax/jquery.min.js"></script>

	<!-- jquery ajax code -->
	<script type="text/javascript">
		$(document).ready(function(){
            $('#saverecords').click(functiont(e){
				e.preventDefault();
				var fname = $("#fname").val();
			    var email = $("#email").val();
                   $.ajax({
					method:"POST",
					url:"./saverecords.php",
					data:{
						"fname":fname,
						 "email":email,
					},
				   })

			})
		});
	</script>

</body>
<!--
<script>
	$("#saverecords").on('click', function(){
			var fname = $("#fname").val();
			var email = $("#email").val();

			$.ajax({
				method: "POST",
				url: "./saverecords.php",
				data: {"fname":fulname, "email":email}
			}).done(function(data) {
                 var result = $.parseJSON(data);
                 var str="";
                 var cls ="";
                 if(result == 1){
                 	str="User records saved successufull";
                 	cls="sucessfull";
                 }else if(result == 2){
                 	str="All fileds are required";
                 	cls="error";
                 }else if(result == 3){
                 	str="Please, enter valid email";
                 	cls="error";
                 }else {
                 	str="user data NOT saved.Please try again";
                 	cls="error";
                 }

           $("#showstatus").show(3000).html(str).addClass('success').hide(5000);
			});
		});
 </script> -->
</html>
