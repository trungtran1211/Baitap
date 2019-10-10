<?php
	$page = "";
	if(isset($_GET['page']) && $_GET['page']){
		$page  = $_GET['page'];
	}
	switch($page){
		case "shop":
			include("shop.php");
			break;
		case "logout":
			include("logout.php");
			break;
		case "update_cart":
			include("update_cart.php");
			break;
		case "cart_proccess":
			include("cart_proccess.php");
			break;
		case "blog":
			include("single-blog.php");
			break;
		case "cart":
			include("cart.php");
			break;
		case "category":
			include("category.php");
			break;
		case "checkout":
			include("checkout.php");
			break;
		case "confirmation":
			include("confirmation.php");
			break;
		case "contact":
			include("contact.php");
			break;
		case "search":
			include("search.php");
			break;
		case "login":
			include("login.php");
			break;
		case "single-product":
			include("single-product.php");
			break;
		case "tracking":
			include("tracking.php");
			break;
		case "registration":
			include("registration.php");
			break;	
		default:
			include("home.php");
	}
?>