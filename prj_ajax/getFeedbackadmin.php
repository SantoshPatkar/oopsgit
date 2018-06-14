<?php

header("Content-type:application/json");

include 'connection.php';
        $readStatus=$_GET['status'];
		$user_id=$_SESSION['id'];
		$sql="SELECT u.id,f.comment,f.isRead,u.role from feedback f JOIN user u on u.id=f.user_id where f.isRead=$readStatus AND u.id=$user_id ORDER BY u.id DESC";
		$result=mysqli_query($conn,$sql);
		$response = [];
			while ($field = mysqli_fetch_array($result))
						{
					   array_push($response,array('comment'=>$field['comment']));
						}
		echo json_encode($response);	


?>