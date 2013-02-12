<?php
require('sql_login.php');
$side_pn=$_GET['spn'];
$main_pn=$_GET['mpn'];
if($side_pn==0){$side_pn=1;}
if($main_pn==0){$main_pn=1;}
include('user_head.php');
include('side.php');
include('main.php');
?>

