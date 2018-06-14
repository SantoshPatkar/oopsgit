
<?php
header("Content-type:application/json");
include("connection.php");

if (isset($_POST['submit']))
{
$a=$_SESSION['id'];
$b=$_POST['dept'];
$c=$_POST['comment'];
$response = [];
$sql = "INSERT INTO feedback (department,user_id,comment,Date) VALUES ('$b',$a,'$c',CURRENT_DATE)";

if(mysqli_query($conn, $sql))
{
	$response["status"] = "success";

} 
else 
{
	$response["status"] ="error";
}

echo json_encode($response);

	}


?>