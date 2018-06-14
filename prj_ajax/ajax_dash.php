<?php
include 'connection.php';
?>



 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Data in PHP using jQuery AJAX without Page Refresh</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">
   
      	<script src="jquery-3.3.1.js"></script>
			<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </head>
  <body>
 
 <div id="dash">

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Insert Data in PHP jQuery AJAX</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">

                         	<form id="DashBoard-form" class="form-group" action="dash_insert.php" method="post">
						<div class="input-group col-md-offset-3 col-md-5">
							<select class="form-control" id="department" name="department" required>
								<option value="" >Select Department</option>
								<option value="HR" >HR</option>
								<option value="Non Technical">Non-Technical</option>
								<option value="IT">IT</option>
								<option value="Finance">Finance</option>
							</select>
						</div>
						<br>
						<div class="input-group col-md-offset-3 col-md-5">
							<textarea class="form-control" name="comment" rows="5" cols="40" placeholder="Feedback" required></textarea>
						</div>
						<br>
						<div class="input-group col-md-offset-6">
							<div class="btn-group" role="group" aria-label="...">
								<button type="submit" name="submit" value="ReDirect" class="btn btn-success">Submit</button>
								<button  type="reset" name="reset" value="reset" class="btn btn-primary">Clear</button>
								<a href="logout.php" class="btn btn-danger" onclick="return confirm('Are You sure you want to logout?')">Logout</a>
							</div></div>
						</form>



							<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Read Notifications</h3>
					</div>
					<div class="panel-body">
						<div>

							<a href="#" id="hide" class="btn btn-danger">Read Notification</a>
							<a href="#" id="show" class="btn btn-danger">UnRead Notification</a>
						</div>
					<div id="message1">
						<?php
						$user_id=$_SESSION['id'];
						$sql="SELECT u.id,f.comment,f.isRead from feedback f JOIN user u on u.ID=f.user_id where isRead=1 AND u.id=$user_id ORDER BY u.id DESC";
						$result=mysqli_query($conn,$sql);
						
						while ($field = mysqli_fetch_array($result))
						{
								echo '<br/>';
						echo '->'. $field['comment'];
						}
						?>
					</div>

					<div id="message2">
						<?php
						$user_id=$_SESSION['id'];
						$sql="SELECT u.id,f.comment,f.isRead from feedback f JOIN user u on u.ID=f.user_id where isRead=0 AND u.id=$user_id ORDER BY u.id DESC";
						$result=mysqli_query($conn,$sql);
						
						while ($field = mysqli_fetch_array($result))
						{
								echo '<br/>';
						echo '->'. $field['comment'];
						}
						?>
					</div>
					</div>
				</div>
                      </div>
                  </div>
 
              </div>
          </div>
      </div>
  </div>
 </div>
</body>
  </html>