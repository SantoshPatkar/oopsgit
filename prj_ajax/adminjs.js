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