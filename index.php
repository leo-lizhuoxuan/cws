<!-- This page used to going to all other page -->
<?php
 //Start the session
 session_start();
 //Connect database
 //require "db.php";
 include "head.php";
 include "nav.php";
 if(isset($_GET['page'])){
 	$page = $_GET['page'];
 }else{
	 //If can't get page go to index.php
 	$page = 'home';
 }
 //show all the page's location
 if($page=='home'){
 	include "home.php";
}elseif($page=='services'){
	include "services.php";
}elseif($page=='order'){
	include "order.php";
}elseif($page=='login'){
	include "login.php";
}elseif($page=='logout'){
	include "logout.php";
}elseif($page=='register'){
	include "register.php";
}elseif($page=='news'){
	include "news.php";
}elseif($page=='addorder'){
	include "addorder.php";
}
?>