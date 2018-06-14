<?php
	include 'connection.php';
	if(isset($_GET['from-date']) && isset($_GET['to-date'])){

		// Default From Date
		if($_GET['from-date'] == ""){
			$fd='2011-01-01';
		}else{
			$fd=$_GET['from-date'];
		}

		// Default ToDate
		if($_GET['to-date'] == ""){
			$td= date('y-m-d');
		}else{
			$td=$_GET['to-date'];
		}
		
		header('Content-Type:text/csv;charset=utf-8');
		header('Content-Disposition:attachment;filename=data.csv');
		$output=fopen("php://output","w");
		fputcsv($output, array('Firstname','Lastname','Department','Feedback','Date'));

		$query="SELECT u.firstname,u.lastname,f.department,f.comment,f.Date from user u JOIN feedback f ON f.user_id=u.ID WHERE Date BETWEEN '$fd' AND '$td' ORDER BY u.ID DESC";
		
		$result=mysqli_query($conn,$query);
		while ($row=mysqli_fetch_assoc($result)) 
		{

			fputcsv($output,$row);
		    
		}
		fclose($output);
	}


?>