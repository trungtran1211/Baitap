<?php
	ob_start();
    $id = $_GET['id'];
    $idloaigo = $_GET['id_loaigo'];
    echo "<script language='javascript'>location.href='?page=home&id=$id&idloaigo=$idloaigo'</script>";
    ob_end_flush();
?>