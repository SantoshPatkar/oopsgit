<?php
	include 'connection.php';
	include 'security.php';
?>
		<div class="container">
			<br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Admin Feedback</h3>
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
							<textarea class="form-control" id="comment" name="comment" rows="5" cols="40" placeholder="Feedback"></textarea>
						</div>
						<br>
						<div class="input-group col-md-offset-6">
							<div class="btn-group" role="group" aria-label="...">
								<input type="submit" value="submit" name="submit" id="submit_admin"  class="btn btn-success">
								<input  type="reset" value="reset" name="reset" onclick="ClearFields();" class="btn btn-primary">
								<a type="button" id="transfer" class="btn btn-danger">Back</a>
							</div></div>
						
					</div>
				</div>


<script>
  function ClearFields() 
{

     document.getElementById("department").value = "";
     document.getElementById("comment").value = "";
}
</script>


<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Notifications</h3>
					</div>
					<div class="panel-body">
						<div>

							<a  id="hide1" class="btn btn-danger">Read Notification</a>
							<a  id="show1" class="btn btn-danger">UnRead Notification</a>
						</div>

				
	                    <ul id="data_read_admin">
						   
						</ul>
					
						<ul id="data_unread_admin">
						   
						</ul>
				
					</div>
				</div>
			</div>
			
			<!-- 
			<script src="jquery-3.3.1.js"></script>
			<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
			
			<script type="text/javascript" src="message.js"></script>
		</body>
	</html>
 -->


 <script>
//To move from feedback page to main page-Admin Page
$('#transfer').click(function()
{
$('#dummy_div').empty();
$.ajax({
url:"adminnew.php",

success:function(html)
{
$('#dummy_div').html(html);
}
});
});

</script>


<script>

$(document).ready(function()
{
     

		 $("#submit_admin").click(function(){

  		var dept = $('#department').val();
  		var comment = $('#comment').val();
  		//console.log("hello");
   		$.ajax ({
  		url:'dash_insert_admin.php',
  		type:'POST',
  		data:{submit:"submit",dept:dept,comment:comment},
  		success:function(data)
  		{
  			//console.log(data);
  			if (data.status=="success")
  			{
  				//console.log(data);
  				alert("succesfully submitted");
  				console.log("Success");
  			}
  			if(data.status=="error")
  			{
  				alert("error");
  			}
  		}
  	});
  });







 var feedback_unread = $('#data_unread_admin').hide();
 var feedback_read = $('#data_read_admin').hide();


	$('#show1').click(function () 
	{
	feedback_read.empty();
           
            $.ajax({
              url:'getFeedbackadmin.php',
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




	$('#hide1').click(function () 
	{
	feedback_unread.empty();
            
            $.ajax({
              url:'getFeedbackadmin.php',
              dataType:'json',
              type :'GET',
              data :{status:'1'},
              success:function(data){
              	//console.log(data);
                $.each(data, function(key,value){
                var content = '<li>'+ value.comment+'</li>';
                //feedback.css('display:block');
                feedback_read.append(content).show();
                feedback_unread.hide();
                });

              }

            });

          });
	});
	</script>


