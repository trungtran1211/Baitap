<?php
    ob_start();
    session_start();
    include('connect.php');
?>
<div style="width: 500px; float: right;height: 300px">

	<!-- //$id = $_GET['id'];
	/*$nameProduct = $row['nameProduct'];
	    $price = $row['price'];
	    $quantity = $row['quantity'];
	    $color = $row['color'];
	    $categoryId = $row['categoryId'];
	    $noibat = $row['optionsRadios'];
	    $detailProduct = $row['detailProduct'];
	    $image = $_FILES['image'];
	    if($image['name'] != ""){
	        $picture = $image['name'];
	        $tmp_name = $image['tmp_name'];
	        $pathpic=$_SERVER['DOCUMENT_ROOT'] . '/Shop_go/images/' . $picture;
	        move_uploaded_file($tmp_name , $pathpic);
	    }*/
	  /*  $update = isset($_SESSION['update']) && $_SESSION['update']? $_SESSION['update'] : [];
	foreach ($update as $key => $row) {
		$nameProduct = $row['nameProduct'];
	    $price = $row['price'];
	    $quantity = $row['quantity'];
	    $color = $row['color'];
	    $categoryId = $row['categoryId'];
	    $detailProduct = $row['detailProduct'];
		
	}
	
	$sl = "UPDATE sanpham SET ten_go = '$nameProduct', id_loaigo = $categoryId, so_luong = $quantity, chi_tiet = '$detailProduct', gia = $price, mausac = '$color' WHERE id =".$id;
	var_dump($sl);
	$db = new database();
	$db->command($sl);
	$update = $_SESSION['update'];
	unset($update[$_GET['id']]);
	$_SESSION['update'] = $update;*/
	    //echo "<script language='javascript'>alert('Sửa thành công');";
	    //echo "location.href='?page=home';</script>";
	/*$sl = "UPDATE sanpham SET ten_go = '$nameProduct', id_loaigo = $categoryId, hinhanh = '$picture', so_luong = $quantity, chi_tiet = '$detailProduct', gia = $price, noi_bat = $noibat, mausac = '$color' WHERE id =".$id;*/ -->
		<form action="" method="post">
    	 <select name="categoryId" >
            <?php
                $dt = new database();
                $dt->select('SELECT * FROM loaigo');
                while ($r = $dt->fetch()) {
            ?>
          <option value="<?php echo $r['id']?>"><?php echo $r['ten_loai_go']?></option>
          <?php

            }
            
          ?>
        </select>
        <input type="submit" name="submit">
		<?php
			if (isset($_POST['submit'])) {
				$categoryId = $_POST['categoryId'];
        		echo $categoryId;
			}
		?>
		</form>
</div>