<?php
	include 'connection.php';
	include 'security.php';
?>

	<!-- <body style="background-color: #824612;"> -->
		
		<div class="container">
			<br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Feedback</h3>
				</div>
				<div class="panel-body">
					

					
				
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
							<textarea class="form-control" name="comment" id="comment" rows="5" cols="40" placeholder="Feedback" required></textarea>
						</div>
						<br>
						<div class="input-group col-md-offset-6">
							<div class="btn-group" role="group" aria-label="...">


								<input type="button" value="submit" name="submit" id="submit_user"  class="btn btn-success">
								<input type="reset" id="reset" name="reset" value="reset" onclick="ClearFields();" class="btn btn-primary">
								<a href="logout.php" class="btn btn-danger" id="logout" >Logout</a>
							</div></div>
						</div>
				</div>


				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Notifications</h3>
					</div>
					<div class="panel-body">
						<div>

							<a  id="hide" class="btn btn-danger">Read Notification</a>
							<a  id="show" class="btn btn-danger">UnRead Notification</a>
						</div>

				
	                    <ul id="data_read">
						   
						</ul>
					
						<ul id="data_unread">
						   
						</ul>
				
					</div>
				</div>
			</div>

<script>
  function ClearFields() 
{

     document.getElementById("department").value = "";
     document.getElementById("comment").value = "";
}
</script>

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

<!-- <script src="my_script.js"></script>

<script src="text/javascript">
	$("#submit_user").on("click",function(){

  		var dept = $('#department').val();
  		var comment = $('#comment').val();
   		$.ajax ({
  		url:'dash_insert.php',
  		type:'POST',
  		data:{submit:"submit",dept:dept,comment:comment},
  		success:function(data){
  			console.log(data);
  			if (data=="success")
  			{
  				alert("succesfully submitted");
  			}
  			if(data=="error")
  			{
  				alert("error");
  			}
  		}
  	});
  })

</script> -->



	<script>
$(document).ready(function()
{
     
		  $("#submit_user").click(function(){
      
      
  		var dept = $('#department').val();
  		var comment = $('#comment').val();
   		$.ajax ({
  		url:'dash_insert.php',
  		type:'POST',
  		data:{submit:"submit",dept:dept,comment:comment},
  		success:function(data)
  		{
  			//console.log(data);
  			if (data.status=="success")
  			{
  				//console.log(data);
  				alert("succesfully submitted");
  			}
  			if(data.status=="error")
  			{
  				alert("error");
  			}
  		}
  	});
  });



 var feedback_unread = $('#data_unread').hide();
 var feedback_read = $('#data_read').hide();

	$('#show').click(function () 
	{
	feedback_read.empty();
           
            $.ajax({
              url:'getFeedback.php',
              dataType:'json',
              type :'GET',
              data :{status:'0'},
              success:function(data)
              {
              	
                $.each(data, function(key,value)
                {
                var content = '<li>'+ value.comment+'</li>';
                //feedback.css('display:block');
                feedback_unread.append(content).show();
                feedback_read.hide();
                });

              }

            })

          });




	$('#hide').click(function () 
	{
	feedback_unread.empty();
            
            $.ajax({
              url:'getFeedback.php',
              dataType:'json',
              type :'GET',
              data :{status:'1'},
              success:function(data){
              	
                $.each(data, function(key,value){
                var content = '<li>'+ value.comment+'</li>';
                //feedback.css('display:block');
                feedback_read.append(content).show();
                feedback_unread.hide();
               });

              }

            })

          });
    });
  
	</script>


