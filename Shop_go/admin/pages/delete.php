<?php
	ob_start();
    $id = $_GET['id'];
    $db = new database();
    $db->command("DELETE FROM sanpham WHERE id =".$id);
    echo "<script language='javascript'>alert('Xóa thành công');";
    echo "location.href='?page=home';</script>";
    ob_end_flush();
?>
    