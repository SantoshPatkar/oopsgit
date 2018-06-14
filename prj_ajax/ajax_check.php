<?php
include("connection.php");

// if (isset($_POST['submit']))

	if (isset($_POST['username']) && isset($_POST['password']))
	 {

	 $username=$_POST['username'];
	 $password=sha1($_POST['password']);

$sql = "SELECT ID,username,password,role FROM user WHERE username='$username' and password='$password' ";
//echo $sql;
$query = mysqli_query($conn,$sql);
$field = mysqli_fetch_array($query);
//print_r($field);
$count=   mysqli_num_rows($query);



//echo $sql;
if ($count == 1)
{
$_SESSION['username']=$field['username'];
$_SESSION['id']= $field['ID'];
$_SESSION['roles']= $field['role'];

// echo "hii ".$_SESSION['username'];
// echo "hii ".$_SESSION['id'];


if($_SESSION['roles']==1)
{
	echo "ADMIN";
//header('Location:ajax_dash.php');	
}
 if($_SESSION['roles']==2)
{
	echo "SUPERADMIN";
	//header('Location:index.php?error_code=1');	
}
if($_SESSION['roles']==0)
{
	echo "Normal User";
}

}
else{
	echo "invalid";
}
}

?>