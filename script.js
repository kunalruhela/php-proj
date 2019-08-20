
$(document).ready(function() {
	$.ajax({
		url: "update.php",
		type: "GET",
		cache: false,
		success: function(data){
			$('#table').html(data); 
		}
  })
});