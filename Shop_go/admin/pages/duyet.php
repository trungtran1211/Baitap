<?php
	$id = $_GET['id'];
	$db = new database();
	$sql = 'UPDATE hoadon SET trang_thai = 2 WHERE id ='.$id;
	$db->command($sql);
	echo "<script language='javascript'>location.href='?page=order'</script>";
