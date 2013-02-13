function check_login()
{
  if (!document.login_form.username.value || !document.login_form.password.value)
  {
    return false;
  }
}
