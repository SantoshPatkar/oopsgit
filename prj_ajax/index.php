00000000
<?php
include 'connection.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vara Feedback Forum</title>

		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/javascript" href="//dataTables.buttons.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js">


		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
		
		
	</head>

	<body>

		<div id="dummy_div">
		
<br/><br/><br/>
		<div class="col-md-offset-5 col-md-7 col-md-offset-4">
			
			<br/>
			

			
			<br/>
			
			<div class="container-fluid">
				<div class="row col-md-7">
				
				<div class="panel panel-danger">
					<div class="panel-heading">
						<left><h5>**Login with username and password</h5></left>
						
					</div>
					<div class="panel-body">
						 
						<span class="label label-success">Enter Username:</span>
						<div class="input-group input-group-lg">
							
							<input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" required>
						</div>
						<br/>
						<span class="label label-success">Enter Password:</span>
						<div class="input-group input-group-lg">
							
							<input type="password" name="password" id="password" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
						</div>

							<div class="form-group">
								
							
								<input type="submit" class="btn btn-default" id="dash_button" name="dash_button" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
								<input type="submit" id="reset" onclick="ClearFields();" class="btn btn-default" value="CLEAR">

								<br/><br/>
								<div class ="container-fluid">
				<ul class="nav nav-pills">
					<li role="presentation" class="active"> 
						<button id="register_btn">For New User?</button>
					</li>
					
				</ul>
			</div>

							</div>

						</div>

					</div>

					</div>
				</div>

				</div>

			
		</div>
	</div>


	<script>
  function ClearFields() 
{

     document.getElementById("username").value = "";
     document.getElementById("password").value = "";
}
</script>


					<script src="jquery-3.3.1.js"></script>
					<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>	
			<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="mystyle.css">
			<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
			<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="my_script.js"></script>
	<script src="adminjs.js"></script>
	<script src="validate_register.js"></script>

				</div>
				</body>
			</html>