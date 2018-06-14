$(document).ready(function () {

$('#message1').hide();
$('#message2').hide();

	$('#hide').click(function () {
		$('#message2').hide();
		$('#message1').show();
		
	});



	$('#show').click(function () {
		$('#message1').hide();
		$('#message2').show();
		
	});


	
})