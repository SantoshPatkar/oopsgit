<?php
include 'connection.php';

if(isset($_POST['id']))
{
	$id=$_POST['id'];
	$sql = "SELECT comment FROM feedback where ID = $id ";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	if($row > 0)
{
			$sql1 = "UPDATE feedback set isRead = 1 where ID = $id";
			mysqli_query($conn,$sql1);
			
				echo $row['comment'];
			


	}
}

?>