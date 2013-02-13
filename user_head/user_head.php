<div id="user_head">
<?
if (!isset($_COOKIE["usr"]) || $_COOKIE["usr"]==""){
	$login_message=true;
}else{
	$logged_in=false;
}
	
if($logged_in){
	include("logged_in_user_head.php");
}else{
	include("unlogged_in_user_head.php");
}
?>
</div>
