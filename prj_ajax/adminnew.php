<?php
include 'connection.php';
include 'security.php';
//$sql="select user_id,department,comment from feedback";
$sql1="select f.ID,f.department,f.comment,f.Date,u.firstname,u.lastname,f.user_id,f.isRead FROM feedback f JOIN user u ON u.ID=f.user_id where role=0 ORDER BY f.ID DESC";

$records=mysqli_query($conn,$sql1);
?>



<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">



		<link rel="stylesheet" type="text/javascript" href="https://code.jquery.com/jquery-1.12.4.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js">




<div class="container">
	
	<h1 align="left"><font color="white"><?php echo "Hello ".strtoupper($_SESSION['username']).","; ?></font></h1>
	<br/>
	<!-- <form method="post" action="export.php">
			<input type="submit" name="export" value="CSV export" class="btn btn-primary"/>
	</form> -->

	<div class="form-group col-md-12">
		<h3><center> Welcome to admin Page</h3>
		<div class="form-group col-md-6"><br/>
			From Date:
			<input type="text" name="from-date" id="from-date">
		</div>
		<div class="form-group col-md-6"><br/>
			ToDate:
			<input type="text" name="to-date" id="to-date">
		</div>


		<div class="form-group col-md-6">
			<div class="form-group col-md-6">
				<br/>
				<button name="filter" id="filter" class="btn btn-info">FILTER <span class="glyphicon glyphicon-calendar"></span>
				</button>
			</div>	
	</div>


				
				
			</div>


			<div class="panel panel-default">
						<div class="panel-heading">

							<a class="btn btn-danger" name="export1" id="csv" onclick="return confirm('Download As CSV?')"> 
								<span class="glyphicon glyphicon-download-alt"> CSV DOWNLOAD</a></span>
							<a id="pdf_download" class="btn btn-danger" name="pdf"  onclick="return confirm('Download As PDF?')">
								<span class="glyphicon glyphicon-download-alt"> PDF DOWNLOAD</a></span>
						</div>
						
						
					<div class="panel-body">
							<div class="row">
								
								<div id="table-responsive">
									<table id="table_2" class="table table-striped">

												<thead  class="alert-info">
													<tr>
														
														<th>Name</th>
														
														<th>Department</th>
														<th>Feedback</th>
														<th>Date</th>
														<th>Action</th>
														<th>output</th>
													</tr>
												</thead>
												<tbody id="feedback">
													<?php
													while($people=mysqli_fetch_array($records))
													{
													echo'
														<tr>
																
														
															
															<td> '.$people["firstname"].' '. $people["lastname"].'	</td>
															<td> '.$people["department"].'</td>
															<td>'.$people["comment"].'</td>
															<td>'.$people["Date"].'</td>
														';
																	
																	if( $people["isRead"] == 1)
																		{
																	echo '<td><button class="btn btn-default" name="view" id="btn_view'.$people['ID'].'" onclick="readComment('.$people['ID'].')">View</button></td>
																		<td id="show'.$people['ID'].'"></td>';
																	}
																	else
																			
																	{
																echo '<td><button class="btn btn-primary" name="view" id="btn_view'.$people['ID'].'" onclick="readComment('.$people['ID'].')">View</button></td>
																		<td id="show'.$people['ID'].'"></td>';
																	}
																		
																		
															echo '</tr>';
														
														}
													?>
													</tbody>
									</table>
								</div>

								</div>
							</div>
					

						<div class="etc-login-form">
							<a href="logout.php" id="logout" class="btn btn-danger">Logout</a>
								<div class="etc-login-form">
									<p>fill feedback? <a id="feedback_button">Fill Feedback</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



			<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/javascript" href="//dataTables.buttons.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js">
			



			<!-- index page links -->
			<script src="jquery-3.3.1.js"></script>
			<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>	

			<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="mystyle.css">
			<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
			<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<script src="adminjs.js"></script>
	

	
	<script src="my_script.js"></script>



			
			<script>
	$(document).ready( function ()
	{
	$('#table_2').DataTable({
		responsive: true
	});
	});



	</script>
						
			<script>
				$(document).ready(function(){
					$('#csv').click(function(){
						// $('#upload_csv').on("submit",function(e)){
						// 		e.preventDefault();
						// 	}
							$.ajax({
								url:"export.php",
								method:"POST",
								data:new FormData(this),
								contentType:False,
								cache:false,
								processData:false,
								
								success:function(html)
								{
									alert();
								}
							});
						});
				});
			</script>



			<!-- <script>
			$(document).ready(function()
			{
			$.datepicker.setDefaults({
			dateFormat: 'yy-mm-dd'
			});
			
			$("#from-date").datepicker();
			$("#to-date").datepicker();
			
			$('#filter').click(function(){
			var from_date = $('#from-date').val();
			var to_date = $('#to-date').val();
			if(from_date != '' && to_date != '')
			{
			$("#table-responsive").empty();
			$.ajax({
			url:"filter.php",
			method:"POST",
			data:{from_date:from_date, to_date:to_date},
			success:function(data)
			{
				
			$('#table-responsive').html(data).show();
			}
			});
			}
			
			});
			});
			</script>
			 -->
			<script>
			$(document).ready(function()
			{
			$('#logout').click(function()
			{
			var vvv = confirm('Are you sure u want to logout?');
			if(vvv = true)
			{
			localStorage.clear();
			}
			});
			});
			</script>