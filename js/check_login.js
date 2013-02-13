function check_login()
{
  if (!document.login_form.email.value || !document.login_form.password.value)
  {
    return false;
  }
  	$.ajax({
		type : "POST",
		url : "/sql/login.php",
		data : {
				'password':document.login_form.password.value,
				'email':document.login_form.email.value},
		cache : false,
		success : function(respond) {
			if (respond!="success"){alert(respond);exit;}
			  	$.ajax({
				type : "POST",
				url : "/user_head/logged_in_user_head.php",
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
