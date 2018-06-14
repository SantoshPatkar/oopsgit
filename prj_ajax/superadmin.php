<?php
include 'connection.php';
include 'security.php';

//Query
$sql1="select t.ID,t.department,t.comment,t.Date,u.firstname,u.lastname,u.role,t.isRead FROM feedback t JOIN user u ON t.user_id = u.ID 
 ORDER by t.ID DESC";
$records=mysqli_query($conn,$sql1);
$roleno=" ";
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
	<br/>
			<h1 align="left"><font color="white"><?php echo "Hello ".strtoupper($_SESSION['username']).","; ?></font></h1>
			<div>

				<div class="form-group col-md-12">
				</font><h3><center><font color="white">Welcome Super Admin</font></center></h3>
					<div class="form-group col-md-3"><br/>

						From Date:
						<input type="text" name="from-date" id="from-date">
					</div>

					<div class="form-group col-md-3"><br/>
						ToDate:
						
						<br/>
						<input type="text" name="to-date" id="to-date">
					</div>
					<br/>
			<div class="form-group col-md-6">
			<div class="form-group col-md-6">
			<br/>
				<button name="filter" id="filter_super" class="btn btn-info">FILTER<span class="glyphicon glyphicon-calendar"></span>
				</button>
			</div>	
	</div>

				
					
					<div class="panel panel-default">
						<div class="panel-heading">

							<a class="btn btn-danger" name="export1" id="csv_super"> 
								<span class="glyphicon glyphicon-download-alt"> CSV DOWNLOAD</a></span>
							<a id="pdf_download" class="btn btn-danger" name="pdf"  onclick="return confirm('Download As PDF?')">
								<span class="glyphicon glyphicon-download-alt"> PDF DOWNLOAD</a></span>
						</div>
						
						<div class="panel-body">
							<div class="row">
								
								<div id="table-responsive">
									<table id="table_1" class="table table-striped">
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
											
										if($people['role']== 0)
											{
												$roleno = "NormalU!";
											}
											elseif($people['role']==1)
											{
													$roleno = "AdminU!";
											}
											else
											{
												$roleno = "SuperAdmin!";
											}
																					
											echo'
											<tr>
													<td> '.$people["firstname"].' '. $people["lastname"].' <span class="badge">'.$roleno.'</span></td>
												 
													<td> '.$people["department"].'</td>
													<td>'.$people["comment"].'</td>
													<td>'.$people["Date"].'</td>
												';
													 if( $people['isRead'] == 1)  
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
							<a href="logout.php"  class="btn btn-danger" id="logout">Logout</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	

		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/javascript" href="//dataTables.buttons.min.js">
		<!-- <link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
		<link rel="stylesheet" type="text/javascript" href="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js">
			 -->



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

	





//for logout
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

	<script>
	$(document).ready( function ()
	{
	$('#table_1').DataTable({
		destroy: true,
		responsive: true
	});
	} );
	</script>

<script>  
      $(document).ready(function(){  
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
                     $.ajax({  
                          url:"filter_super.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                          	 $("#feeback").empty();
                               $('#feedback').html(data);  
                          }  
                     });  
                }  
               
           });  
      });  
 </script>

 <script>
 	$(document).ready(function()
			{
						$('#csv_super').click(function()
					{
							// $('#upload_csv').on("submit",function(e))
							// {
							// 	e.preventDefault();
							// }
							$.ajax({
								url:"export_super.php",
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

<script>
	$('#filter_super').click(function()
{
var from_date = $('#from-date').val();
var to_date = $('#to-date').val();
if(from_date != '' && to_date != '')
{
$("#table-responsive").empty();
$.ajax({
url:"filter_super.php",
method:"POST",
data:{from_date:from_date, to_date:to_date},
success:function(data)
{
	$('#table-responsive').html(data).show();
}
});
}

});
</script>


	<!-- <script>
			$(document).ready(function()
			 {
    $('#employee_data').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
 -->




