<?php
	$page = "";
	if(isset($_GET['page']) && $_GET['page']){
		$page  = $_GET['page'];
	}
	switch($page){
		case "insert":
			include("insert.php");
			break;
		case "duyet":
			include("duyet.php");
			break;
		case "login":
			include("login.php");
			break;
		case "delete-order":
			include("delete_order.php");
			break;
		case "home":
			include("home.php");
			break;
		case "detail":
			include("detail.php");
			break;
		case "delete":
			include("delete.php");
			break;
		case "order":
			include("order.php");
			break;
		case "tables":
			include("tables.php");
			break;
		case "home_code":
			include("home_code.php");
			break;	
		default:
			include("dashboard.php");
	}
?>