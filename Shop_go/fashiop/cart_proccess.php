<?php 
	$id = $_GET['id'];
	if (isset($id) && $id) {
		$dt = new database();
		$dt->select('SELECT * FROM sanpham WHERE id = '. $id);
		$row = $dt->fetch();
		if (isset($_SESSION['cart']) && $_SESSION['cart']) {
			$products = $_SESSION['cart'];
			if (isset($products[$row['id']]) && $products[$row['id']]) {
				$products[$row['id']]['soluong']++;
			}else{
				$item = array(
					'id' => $row['id'],
					'hinhanh' => $row['hinhanh'],
					'tensp' => $row['ten_go'],
					'giatien' => $row['gia'],
					'soluong' => 1
				);
				$products[$row['id']] = $item;
			}
			$_SESSION['cart'] = $products;
		}else{
			$item = array(
				'id' => $row['id'],
				'hinhanh' => $row['hinhanh'],
				'tensp' => $row['ten_go'],
				'giatien' => $row['gia'],
				'soluong' => 1
			);
			$products[$row['id']] = $item;
			$_SESSION['cart'] = $products;
		}
		header('location:?page=cart');
	}
?>