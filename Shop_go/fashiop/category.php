
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Sản phẩm theo loại</h2>
					<div class="page_link">
						<a href="?page=home">Trang chủ</a>
						<a href="?page=category">Loại gỗ</a>
					</div>
				</div>
				
			</div>
		</div>

	</section>
	<!--================End Home Banner Area =================-->
	<div class="container sanpham">
		<h3 class="text-center p-5">
			<?php 
			$idloaigo = $_GET['idloaigo'];
			$db = new database();
			$db->select('SELECT * FROM loaigo WHERE id = '.$idloaigo);
			$r = $db->fetch();
			echo $r['ten_loai_go'];
			?>
		</h3>
		<form action="" method="POST">
			<div class="row">
			<?php
				
				$db = new database();
				$db->select('SELECT * FROM sanpham WHERE id_loaigo = '.$idloaigo);
				//$sl= mysqli_query($conn,"SELECT * FROM sanpham ");
				while($row = $db->fetch()){
			?>
				
					<div class="col col1">
						<div class="autoplay slider">
						<div class="f_p_item">
							<div class="f_p_img">
								<a href="?page=single-product&id=<?php echo $row['id']?>">
									<img class="img-fluid" src="../images/<?php echo $row['hinhanh']?>" alt="ảnh sản phẩm">
								</a>
								<div class="p_icon">
									<a href="?page=cart_proccess&id=<?php echo $row['id'] ?>">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
							<a href="#">
								<h4><?php echo $row['ten_go'] ?></h4>
							</a>
							<h5><?php echo number_format($row['gia']) ?> ₫</h5>
						</div>
						</div>
					</div>
				
			<?php } ?>
			</div>
		</form>
	</div>