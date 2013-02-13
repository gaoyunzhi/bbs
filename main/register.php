<div class="register_panel">
<?
$reg_instruction=mysql_query("select * from instruction where type='reg'");
while ($instruction = mysql_fetch_assoc($reg_instruction)){
	$varname="reg_".$instruction["name"]."_instruction";
	$$varname=$instruction["instruction"];
}
?>
<script src="/js/check_reg.js"></script>
	<form name="reg_form" action=# method="POST" onSubmit="return check_reg()" />
		<ol>
		<li>email:<input type="text" name="email" /><?=$reg_email_instruction?></li>
		<li>password:<input type="password" name="password" /><?=$reg_password_instruction?></li>
		<li>username:<input type="text" name="username" /><?=$reg_username_instruction?></li>
		<input type="submit" value="register"/>
	</form>
<div>
