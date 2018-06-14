$(document).ready(function()
{

$('#submit').blur(function()
{

var fname = $('#firstname').val();
var lname = $('#lastname').val();
var email = $('#email').val();
var age = $('#age').val();
var username = $('#username').val();
var Password = $('#password').val();
var CPassword = $('#cpassword').val();
var username_flag = false;
var name_regex = /^[a-zA-Z]+$/;
var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

//var add_regex = /^[0-9a-zA-Z]+$/;





// if (fname.length == 0)
// {
// $('#availability1').text("* All fields are mandatory *");
// $("#fname").focus();
// return false;
// }

 if (!fname.match(name_regex) || fname.length == 0) {
$('#availability1').text("For your first name please use alphabets only ");
$("#fname").focus();
return false;
}

else if (!lname.match(name_regex) || lname.length == 0) {
$('#availability2').text(" For your last name please use alphabets only");
$("#lname").focus();
return false;
}

else if (!email.match(email_regex) || email.length == 0) {
$('#availability3').text("Please enter a valid email address");
$("#email").focus();
return false;
}

else if (isNaN(age)||age<=1||age>100){
$('#availability4').text("Please enter a valid age");
$("#age").focus();
return false;
}


else if ((!(username.length >= 10 ) || username.length == 0) && username_flag == true ) {
$('#availability5').text(" Please enter above 6 characters and username avilable");
$("#username").focus();
return false;
}

else if(!(Password.length >=6) || Password.length ==0){
$('#availability6').text("Please enter above 6 characters");
$("#Password").focus();
return false;
}

else if(Password!=CPassword)
{
$('#availability6').text("password do not match");
$("#Password").focus();
return false;
}

else
 {
var fn = $('#firstname').val();
var ln = $('#lastname').val();
var el = $('#email').val();
var ag = $('#age').val();
var un = $('#username').val();
var pass = $('#password').val();

// var datastring =
//  {
//   type:'itsdone',
//   fn : fn,
//   ln : ln,
//   el:el,
//   ag:ag,
//   un:un,
//   pass:pass

// }


$.ajax
({
type :"POST",
url :"insertdata.php",
data:{submit:"submit",firstname : fn,lastname : ln, email:el, age:ag, username:un, password:pass},
success: function(data)
{
 (data.status=="success")
  			{
  				//console.log(data);
  				alert("Registered Successfully");
  				$('#dummy_div').empty();
$.ajax({
url:"index.php",

success:function(html)
{
$('#dummy_div').html(html);
}
});
  				//console.log("Success");
  			}
 if(data.status=="error")
  			{
  				alert("Data Not Registered");
  			}
}
});

// alert("Form Submitted Successfuly!");
// return true;
}
});


$('#username').blur(function()
{
var username= $('#username').val();
$.ajax({
url:"insertdata.php",
method:"POST",
data:{user_name:username},
success:function(data)
{
if (data.status=="success")
{
$('#availability5').html("not available");
}
if(data.status=="fail")
{
$('#availability5').html("available");
}
}
});
});
});