function logout()
{
  	$.ajax({
		type : "POST",
		url : "/sql/logout.php",
		data : {},
		cache : false,
		success : function() {
			  	$.ajax({
				type : "POST",
				url : "/user_head/unlogged_in_user_head.php",
				data: {},
				cache : false,
				success : function(respond) {			
					document.getElementById("user_head").innerHTML=respond;		
					}
				});			
		}
	});
	return false;
}
