
<?php
header("Content-type:application/json");
include 'connection.php';



if(isset($_POST["user_name"]))
{
	$username = $_POST["user_name"];
	
	$sql1="select username from user where username='$username'";
  	

$result=mysqli_query($conn,$sql1);
$row = mysqli_num_rows($result);
$response_value = [];
if($row == 1)	
		{
			$response_value["status"] = "success";	
		} 
		else
		{
				$response_value["status"] = "fail";
			}
			echo json_encode($response_value);

}


if(isset($_POST['submit']))

{
	$a=$_POST['firstname'];
	$b=$_POST['lastname'];
	$c=$_POST['email'];
	$d=$_POST['age'];
	$e=$_POST['username'];
	$f=sha1($_POST['password']);
	//$g=$_POST['role'];

// attempt insert query execution

$sql = "INSERT INTO user (firstname,lastname,email,age,username,password) VALUES ('$a', '$b', '$c' , $d, '$e','$f')";
//echo $sql;
$response_code = [];
if(mysqli_query($conn, $sql))
{
			$response_code["status"] = "success";	
		} 
		else
		{
				$response_code["status"] = "fail";
			}
			echo json_encode($response_code);


}

?>