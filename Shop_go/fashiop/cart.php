<?php 
//print_r($_POST); die();
	//Xoa san pham khoi gio hang
	if(isset($_POST['btnXoa']) && isset($_POST['id']) && $_POST['id'] && $_POST['btnXoa']){
		$products = $_SESSION['cart'];
		unset($products[$_POST['id']]);
		$_SESSION['cart'] = $products;
		header("Refresh:0; url=?page=cart");
	}

	//Trừ san pham
	if(isset($_POST['btnTru']) && isset($_POST['id']) && $_POST['id'] && $_POST['btnTru']){
		$products = $_SESSION['cart'];
		//nếu số lượng lớn hơn 1 thì trừ đi 1 đơn vị, ngược lại bằng 1 thì xóa khỏi giỏ hàng
		if($products[$_POST['id']]['soluong'] > 1){
			$products[$_POST['id']]['soluong']--;
		}else{
			unset($products[$_POST['id']]);
		}
		$_SESSION['cart'] = $products;
	}

	//Cộng san pham
	if(isset($_POST['btnCong']) && isset($_POST['id']) && $_POST['id'] && $_POST['btnCong']){
		$products = $_SESSION['cart'];
		$products[$_POST['id']]['soluong']++;
		$_SESSION['cart'] = $products;
	}

?>
<!--================Home Banner Area =================-->
<section class="banner_area" style="height: 200px">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-center">
				<h2>Giỏ hàng</h2>
				<div class="page_link">
					<a href="?page=home">Trang chủ</a>
					<a href="?page=cart">Giỏ hàng</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->
<section class="cart_area" style="padding-top: 0px">
	<div class="container">
		<?php
			if (isset($_SESSION['cart']) && $_SESSION['cart']) {
		?>
		<div class="cart_inner">
			<div class="table-responsive">
				<form action="" method="POST">
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Sản phẩm</th>
								<th scope="col">Giá</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Thành tiền</th>
								<th scope="col">Xóa sản phẩm</th>
							</tr>
						</thead>
						
						
						<tbody>
						<?php
							$tongtien = 0;
							$total = 0;
							$i = 1;
							$carts = isset($_SESSION['cart']) && $_SESSION['cart']? $_SESSION['cart'] : [];
							foreach ($carts as $key => $row) {
							$i++;
						?>
						<?php 
							$item_total = $row['giatien'] *  $row['soluong'];
							$total += $item_total;
							
						?>
							<tr>
							<td>
								<div class="media">
									<div class="d-flex">
										<img src="../images/<?php  echo $row['hinhanh']; ?>" alt="ảnh sản phẩm" style="    width: 50px;height: 50px;">
									</div>
									<div class="media-body">
										<h5><?php echo $row['tensp'];?></h5>
									</div>
								</div>
							</td>
							<td>
								<h5><?php echo number_format($row['giatien']);?></h5>
							</td>
							<td>
								<div class="product_count">
									<form action="" method="POST">
										<input type="submit" name="btnTru" value="-">
										<input type="text" name="soluong" value="<?php echo $row['soluong']; ?>" disabled>
										<input type="submit" name="btnCong" value="+">
										<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 
									</form>
								</div>
							</td>
							<td>
								<h5><?php echo number_format($item_total)."đ";?></h5>
							</td>
							<td>
								<form action="" method="POST">
								<input type="submit" name="btnXoa" value="XÓA" class="main_btn">
								<input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 
								</form>
							</td>
							<br/>
						</tr>
						<?php 
							}
						?>
						<tr>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h4>Tổng tiền :</h4>
								</td>
								<td>
									<h4>
										<?php 
										$tongtien += $total;
											echo number_format($tongtien)."đ";
										?>	
									</h4>
								</td>
							</tr>
							<tr class="out_button_area">
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>

								</td>
								<td>
									<div class="checkout_btn_inner">
										<a class="gray_btn" href="?page=home">Tiếp tục mua hàng</a>
										<a class="main_btn" href="?page=checkout">Tiến hành thanh toán</a>
									</div>
								</td>
							</tr>
						</tbody>
						
					</table>
				</form>
			</div>
		</div>
		<?php
			}else{
				echo "<h3>Giỏ hàng rỗng</h3>"."<br>";
				echo "<a href='?page=home'>Tiếp tục mua hàng</a>";
			}
		?>
	</div>
</section>