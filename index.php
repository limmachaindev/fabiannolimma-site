<?php
session_start();
session_create_id();
include('setting/configuracoes.php');
$page = $_GET['pag'];
include('setting/head.php');
include('paths/header.php');
/////////////////////////////////
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
/////////////
case "blog";
include('pages/blog.php');
break;
/////////////
/////////////
case "lerblog";
include('pages/blog-ler.php');
break;
/////////////

}
/////////////////////////////////
include('paths/footer.php');
?>