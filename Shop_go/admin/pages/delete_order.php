<?php
	$id = $_GET['id'];
	$sql = "DELETE FROM hoadon WHERE id =".$id;
	$sql1 = "DELETE FROM chitiethoadon WHERE id_hoadon =".$id;
	$db = new database();
	$db->command($sql);
	$db->command($sql1);
	echo "<script language='javascript'>location.href='?page=order';</script>";