<script src="/js/check_login.js"></script>
<div id="unlogged_in_user_head">
	<form name="login_form" action=# method="POST" onSubmit="return check_login()" />
		email:<input type="text" name="username" />
		密码:<input type="password" name="password" />
		<input type="submit" value="登录"/>
	</form>
	<a href="index.php?mpn=register&spn=<?=$side_pn?>">注册</a>
</div>
