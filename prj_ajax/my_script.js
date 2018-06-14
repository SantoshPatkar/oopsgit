$(document).ready(function()
{
//admin.js-----readcomment for admin file
function readComment(id)
{

$.ajax({
url : 'view.php',
type: 'POST',
data: 'id='+id,
success:function(data)
{
console.log(data);
$('#show'+id).html(data);
$('#btn_view'+id).removeClass('btn-primary');
$('#btn_view'+id).addClass('btn-default');
}
});
}
//Hide and show function used for Read and Unread messages
// $('#message1').hide();
// $('#message2').hide();
// $('#hide').click(function ()
//  {
//  $('#message2').hide();
//  $('#message1').show();

// });


//dash to dash_insert-----on button click to insert feedback-Normal User
// $("#submit_user").on("click",function(){
// var dept = $('#department').val();
// var comment = $('#comment').val();
// $.ajax ({
// url:'dash_insert.php',
// type:'POST',
// data:{submit:"submit",dept:dept,comment:comment},
// success:function(html)
// {
// console.log(html);
// if (html=="success")
// {
// alert('succesfully loogged in');
// }
// if(html=="error")
// {
// alert("error");
// }
// }
// });
// })


//dashsuper to dash_insert_admin-----on button click to insert feedback-Admin user
// $("#submit_admin").on("click",function(){
// var dept = $('#department').val();
// var comment = $('#comment').val();
// $.ajax ({
// url:'dash_insert_admin.php',
// type:'POST',
// data:{submit:"submit",dept:dept,comment:comment},
// success:function(data){
// console.log(data);
// if (data=="success")
// {
// alert("succesfully submitted");
// }
// if(data=="error")
// {
// alert("error");
// }
// }
// });
// })
//csv.js------for csv download
$("#from-date").datepicker({
dateFormat:'yy-mm-dd'
});
$("#to-date").datepicker(
{
dateFormat:'yy-mm-dd'
});

$('#csv').click(function(e)
{
var from_date = $('#from-date').val();
var to_date = $('#to-date').val();
e.preventDefault();
var url = "export.php?from-date="+from_date+"&to-date="+to_date;
//alert(url);
window.location.href=url;

});
$('#pdf_download').click(function(e)
{
var from_date = $('#from-date').val();
var to_date = $('#to-date').val();
e.preventDefault();
var url = "fpdfdemo.php?from-date="+from_date+"&to-date="+to_date;
//alert(url);
window.location.href=url;

});


$('#csv_super').click(function(e)
{
var from_date = $('#from-date').val();
var to_date = $('#to-date').val();
e.preventDefault();
var url = "export_super.php?from-date="+from_date+"&to-date="+to_date;
//alert(url);
window.location.href=url;

});





			// $(document).ready(function()
			// {
			// $.datepicker.setDefaults({
			// dateFormat: 'yy-mm-dd'
			// });
			
			// $("#from-date").datepicker();
			// $("#to-date").datepicker();
			
			// $('#filter').click(function(){
			// var from_date = $('#from-date').val();
			// var to_date = $('#to-date').val();
			// if(from_date != '' && to_date != '')
			// {
			// $("#table-responsive").empty();
			// $.ajax({
			// url:"filter.php",
			// method:"POST",
			// data:{from_date:from_date, to_date:to_date},
			// success:function(data)
			// {
				
			// $('#table-responsive').html(data).show();
			// }
			// });
			// }
			
			// });
	
			

//Date filter function on single click on textbox

$('#filter').click(function()
{
var from_date = $('#from-date').val();
var to_date = $('#to-date').val();
if(from_date != '' || to_date != '')
{
$("#table-responsive").empty();
$.ajax({
url:"filter.php",
method:"POST",
data:{from_date:from_date, to_date:to_date},
success:function(data)
{
	$('#table-responsive').html(data).show();
}
});
}

});

$('#filter_super').click(function()
{

var from_date = $('#from-date').val();
var to_date = $('#to-date').val();
if(from_date != '' || to_date != '')
{
$("#table-responsive").empty();
$.ajax({
url:"filter_super.php",
method:"POST",
data:{from_date:from_date, to_date:to_date},
success:function(data)
{
	$('#table-responsive').html(data).show();
}
});
}
 });


//Username availability
// $('#username').blur(function()
// {
// var username=$(this).val();
// $.ajax({
// url:"insertdata.php",
// method:"POST",
// data:{user_name:username},
// dataType:"text",
// success:function(html)
// {
// $('#availability5').html(html);
// }
// });
// });



//DataTable Function



// Read Comment-Function to view the feedback on button click
function readComment(id)
 {
$.ajax({
url : 'view.php',
type: 'POST',
data: 'id='+id,
success:function(data)
{
console.log(data);
$('#show'+id).html(data);
$('#btn_view'+id).removeClass('btn-primary');
$('#btn_view'+id).addClass('btn-default');
}
});
}

// //move from register page to index page without filling form
// <script>    
// $('#register').click(function()
// {
// $('#dummy_div').empty();
// $.ajax({
// url:"index.php",

// success:function(html)
// {
// $('#dummy_div').html(html);
// }
// });
// });
// </script> 


//To move from adminnew page to fill feedback(dashsuper.php) page
$('#feedback_button').click(function()
{
$('#dummy_div').empty();
$.ajax({
url:"dashsuper.php",

success:function(html)
{
$('#dummy_div').html(html);
}
});
});



//To move from index page to register page
$('#register_btn').click(function()
{
$('#dummy_div').empty();
$.ajax({
url:"register.php",

success:function(html)
{
$('#dummy_div').html(html);
}
});
});





//To move from main page to feedback page-Admin Page
$('#feedback_button').click(function()
{
$('#dummy_div').empty();
$.ajax({
url:"dashsuper.php",

success:function(html)
{
$('#dummy_div').html(html);
}
});
});



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





//To move from register page to index
$('#register').click(function()
{
$('#dummy_div').empty();
$.ajax({
url:"index.php",

success:function(html)
{
$('#dummy_div').html(html);
}
});
});


//browser refresh code

test1 = JSON.parse(localStorage.getItem("is_Reloaded_admin"));
test2 = JSON.parse(localStorage.getItem("is_Reloaded_super"));
test3 = JSON.parse(localStorage.getItem("is_Reloaded_normal"));
if(test1==true)
{
$.ajax({
type:'Post',

url: 'adminnew.php',
success:function(html)
{
$('#dummy_div').html(html);
}

});

}


if(test2==true)
{
$.ajax({
type:'Post',

url: 'superadmin.php',
success:function(html)
{
$('#dummy_div').html(html);

}

});
}


if(test3==true)
{
$.ajax({
type:'Post',

url: 'dash.php',
success:function(html)
{

$('#dummy_div').html(html);

}
});
}






//Based on the conditions given in ny_scripte file
$('#dash_button').click(function()
{

var username = $('#username').val();
var password = $('#password').val();
if(username != "" && password != "")
{
$.ajax({
type:'Post',
cache: false,
url: 'ajax_check.php',
data: {username:username,password:password},

success:function(html)
{
if(html=="ADMIN")
{

$.ajax({
type:'Post',
cache: false,
url: 'adminnew.php',
success:function(html)
{
$('#dummy_div').empty();
	
localStorage.setItem("is_Reloaded_admin","true");
$('#dummy_div').html(html);
}

});
}
if(html=="SUPERADMIN")
{

$.ajax({
type:'Post',
cache: false,
url: 'superadmin.php',
success:function(html)
{
$('#dummy_div').empty();

localStorage.setItem('is_Reloaded_super', true);
$('#dummy_div').html(html);

}

});
}
if(html=="Normal User")
{

$.ajax({
type:'Post',
cache: false,
url: 'dash.php',
success:function(html)
{
$('#dummy_div').empty();

localStorage.setItem('is_Reloaded_normal',true);
$('#dummy_div').html(html);

}

});
}

if(html == "invalid")
{
	alert('Invalid Credentials!!!!');
}

}
});
}
else{
	alert("Incomplete Data!!!");
}
});






});