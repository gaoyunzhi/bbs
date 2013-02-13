function check_reg()
{
  if (!document.reg_form.username.value || !document.reg_form.password.value ||!document.reg_form.email.value)
  {
    return false;
  }
	$.ajax({
		type : "POST",
		url : "/sql/reg.php",
		data : {'username':document.reg_form.username.value,
				'password':document.reg_form.password.value,
				'email':document.reg_form.email.value},
		cache : false,
		success : function(respond) {
			alert(respond);
			if (respond=="success"){window.history.back();}
		}
	});
	return false;
}
