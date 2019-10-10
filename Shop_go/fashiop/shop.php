

	<!--================Home Banner Area =================-->
	<section class="home_banner_area" style="background: url(img/banner/slider.jpg) no-repeat center bottom;min-height: 605px;">
		
	</section>
	<!--================End Home Banner Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Sản Phẩm</h2>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
				<form action="" method="POST">
					<div class="row">
					<?php
						$db = new database();
						$db->select('SELECT * FROM sanpham');
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
				<div class="row">
					<nav class="cat_page mx-auto" aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">01</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">02</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">03</a>
							</li>
							<li class="page-item blank">
								<a class="page-link" href="#">...</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">09</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!--================ Subscription Area ================-->
	
	<!--================ End Subscription Area ================-->
	<script type="text/javascript">
		function nextcart() {
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
		}
	</script>