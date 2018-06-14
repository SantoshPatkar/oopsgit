<<!-- ?php

	include 'connection.php';
	$error_code="";
	$success_code="";

if(isset($_GET['success_code']))
{
		$success_code = $_GET['success_code'];
}
if(isset($_GET['error_code']))
{
		$error_code = $_GET['error_code'];
 }


?>
 -->
<!-- <!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Register Page</title>
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body> -->
<div id="dummy_div">

	<br/><br/><br/><br/>
<div class="col-md-offset-3 col-md-5 col-md-offset-4">



<div class="container-fluid">
	<div class="panel panel-danger">
	
		<div class="panel-heading">
			REGISTER PAGE

		</div>

	<div class="panel-body">

				

							<div class="row col-md-12">
								<div class="form-group col-md-6">
									<span id="availability00"></span>
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname" >
									<span id="availability1"></span>
								</div>

								<div class="form-group col-md-6">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control"  id="lastname" name="lastname" placeholder="lastname" >
									<span id="availability2"></span>
								</div>

							</div>
							<div class="row col-md-12">
								<div class="form-group col-md-12">
									<label for="email">Email</label>
									<input type="text" class="form-control"  id="email" name="email"  name="email" placeholder="email" >
									<span id="availability3"></span>
								</div>

							</div>

							<div class="row col-md-12">
								<div class="form-group col-md-12">
									
										<label for="age">Age</label>
										<input type="text" class="form-control"  id="age" name="age" placeholder="age" >
										<span id="availability4"></span>
									</div>
								</div>
						
							
							<div class="row col-md-12">
								<div class="form-group col-md-12">
									
										<label for="username">User Name</label>
										<input type="text" class="form-control"  id="username" 
										name="username" placeholder="username" >
										<span id="availability5"></span>

									
								</div>
							</div>

							<div class="row col-md-12">
								<div class="form-group col-md-6">
									
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="password" >
										<span id="availability6"></span>
									</div>
								
								<div class="form-group col-md-6">
									<div class="form-group">
												<label for="password">Confirm Password</label>
										<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="cpassword" >
										
									</div>

								</div>
							</div>

								<div class="row col-md-12">

									<div class="form-group col-md-4">
										<button id="submit" name="submit" value="Register" class="btn btn-success">Submit</button>
									
									</div>

									<div class="form-group col-md-4">
										<input type="reset" id="reset" value="Clear" onclick="ClearFields();" class="btn btn-success"><i class="fa fa-chevron-right"></i>
									</div>

									<div class="form-group col-md-4">
										
										<input type="submit" id="register_button" name="Back" value="GOTO Login" class="btn btn-success"><i class="fa fa-chevron-right"></i>
									</div>

									
								</div>

						
	</div>
	</div>
</div>


</div></div>
		<!-- 	<script src="jquery-3.3.1.js"></script>
			<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
			
				<script src="validate_register.js"></script>
				<script src="my_script.js"></script>



<script>
  function ClearFields() 
{

     document.getElementById("firstname").value = "";
     document.getElementById("lastname").value = "";
      document.getElementById("email").value = "";
     document.getElementById("age").value = "";
      document.getElementById("username").value = "";
     document.getElementById("password").value = "";
      document.getElementById("cpassword").value = "";
     
}
</script>




	<script>		
$('#register_button').click(function()
{
$('#dummy_div').empty();
$.ajax({
url:"index.php",

success:function(html)
{
$('#dummy_div').html(html);
}
});
});
</script>	













				<!-- <script type="text/javascript">
  $(document).ready(function() {


      $('#submit').click(function(e){
        e.preventDefault();


        var fname = $("#firstname").val();
        var lname = $("#lastname").val();
        var gmail = $("#email").val();
        var age = $("#age").val();
        var username = $("#lastname").val();
        var password = $("#message").val();


        $.ajax({
            type: "POST",
            url: "/formProcess.php",
            dataType: "json",
            data: {name:name, email:email, msg_subject:msg_subject, message:message},
            success : function(data){
                if (data.code == "200"){
                    alert("Success: " +data.msg);
                } else {
                    $(".display-error").html("<ul>"+data.msg+"</ul>");
                    $(".display-error").css("display","block");
                }
            }
        });


      });
  });
</script> -->

<!-- </body>
</html> -->