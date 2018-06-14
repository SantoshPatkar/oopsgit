<?php  //filter.php
include 'connection.php';
include 'security.php';
if(isset($_POST["from_date"]) && isset($_POST["to_date"]))
{
// Default From Date
if($_POST["from_date"] == "")
{
$fd='2011-01-01';
}
else
{
$fd=$_POST["from_date"];
}
// Default ToDate
if($_POST["to_date"] == "")
{
$td= date('Y-m-d');
}
else
{
$td=$_POST["to_date"];
}

$query="select t.ID,t.department,t.comment,t.Date,u.firstname,u.lastname,u.role,t.isRead FROM feedback t JOIN user u ON t.user_id = u.ID where Date BETWEEN '".$fd."' AND '".$td."' AND u.role!=2 ORDER by t.ID DESC";
$roleno='';
// $query="select t.ID,t.department,t.comment,t.Date,u.firstname,u.lastname,u.role FROM feedback t JOIN user u ON t.user_id = u.ID where Date BETWEEN '".$fd."' AND '".$td."' AND u.role=0 ORDER by t.ID DESC";

echo '<table id="table24" class="table table-striped">
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
  <tbody>';
    $records=mysqli_query($conn,$query);
    while($people=mysqli_fetch_assoc($records))
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
      if( $people["isRead"] == 1)
      {
      
      echo '<td><button class="btn btn-default" name="view" id="btn_view'.$people['ID'].'" onclick="readComment('.$people['ID'].')">View</button></td>
      <td id="show'.$people['ID'].'"></td>';
      }
      else
      {
      echo '<td><button class="btn btn-primary" id="btn_view'.$people['ID'].'" onclick="readComment('.$people['ID'].')">View</button></td>
      <td id="show'.$people['ID'].'"></td>';
      }
    echo '</tr>';
    
    }

    }
  echo '        </tbody>
</table>';

?>
<script>
$(document).ready( function ()
{
$('#table24').DataTable({
responsive: true
});
});
</script>