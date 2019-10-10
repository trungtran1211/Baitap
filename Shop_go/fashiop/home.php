

	<!--================Home Banner Area =================-->
	<section class="home_banner_area" style="background: url(img/banner/slider.jpg) no-repeat center bottom;min-height: 605px;">
		
	</section>
	<!--================End Home Banner Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
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
											<!-- <button onclick="window.location.href='?page=cart&id=<?php echo $row['id'] ?>';" name="nextcart" style="border: none; background: none"> -->
												<a href="?page=cart_proccess&id=<?php echo $row['id']?>">
												<i class="lnr lnr-cart"></i>
												</a>
											</button>
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
	<section class="subscription-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>Subscribe for Our Newsletter</h2>
						<span>We won’t send any kind of spam</span>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div id="mc_embed_signup">
						<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
						 method="get" class="subscription relative">
							<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
							 required="">
							<!-- <div style="position: absolute; left: -5000px;">
								<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
							</div> -->
							<button type="submit" class="newsl-btn">Get Started</button>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Subscription Area ================-->
	