	$.ajax({
	  url:'admin.php',
	  type:'GET',
	  datatype:'html',
	  success:function(responsedata){
	   $('#responsedata').html(responsedata);   
	  }
	});  
