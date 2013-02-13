<div id="user_head">
<?
if (!isset($_COOKIE["name"]) || $_COOKIE["name"]==""){
	$logged_in=false;
}else{
	$logged_in=true;
}
	
if($logged_in){
	include("logged_in_user_head.php");
}else{
	include("unlogged_in_user_head.php");
}
?>
</div>
