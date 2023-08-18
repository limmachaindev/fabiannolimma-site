<?php

include('paths/header.php');
/////////////////////////////////
$page = $_GET['pag'];
switch($page){
/////////////
default:
include('pages/home.php');
break;
/////////////
/////////////
case "home";
include('pages/home.php');
break;
/////////////

}
/////////////////////////////////
include('paths/footer.php');
?>