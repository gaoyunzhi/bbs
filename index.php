<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="/js/logout.js"></script>
<script src="/js/check_login.js"></script>
<script src="/js/check_reg.js"></script>
<?
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require("$root/sql/sql_login.php");
$side_pn=$_GET['spn'];
$main_pn=$_GET['mpn'];
if($side_pn==NULL){$side_pn=1;}
if($main_pn==NULL){$main_pn=1;}
include("$root/user_head/user_head.php");
include("$root/side/side.php");
include("$root/main/main.php");
?>