
<!--================Header Menu Area =================-->
<header class="header_area">
	<div class="top_menu row m0">
		<div class="container-fluid">
			<div class="float-left">
				<p>Phone: 0353136067</p>
			</div>
			<?php
				$login = isset($_SESSION['user']) ? '' : '?page=login';
			?>
			<div class="float-right">
				<ul class="right_side">
					<li>
						<a href="<?php echo $login;?>" onclick="check()">
							Đăng nhập
						</a>
					</li>
					<li>
						<a href="?page=registration">
							Đăng ký
						</a>
					</li>
					<li>
						<a href="?page=contact">
							Liên hệ
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="?page=home">
					<img src="img/logo2.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<div class="row w-100">
						<div class="col-lg-7 pr-0">
							<ul class="nav navbar-nav center_nav pull-right">
								<li class="nav-item <?php if($_GET['page'] == 'home'){ echo 'active';}else{ echo '';} ?>">
									<a class="nav-link " href="?page=home">Trang chủ</a>
								</li>
								<li class="nav-item submenu dropdown <?php if( $_GET['page'] == 'blog' ){ echo 'active';}else{ echo '';} ?>">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
									<ul class="dropdown-menu">
										<?php
											$db = new database();
											$db->select('SELECT * FROM loaigo');
											while($row = $db->fetch()){
										?>
										<li class="nav-item">
											<a class="nav-link" href="?page=category&idloaigo=<?php echo $row['id']?>"><?php echo $row['ten_loai_go']?></a>
										</li>
										<?php
										}
										?>
									</ul>
								</li>
								<li class="nav-item submenu dropdown">
									<a class="nav-link" href="?page=blog">Tin tức</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="?page=contact">Liên hệ</a>
								</li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle <?php if($_GET['page'] == 'tracking'){ echo 'active';}else{ echo '';} ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Đơn hàng</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a class="nav-link" href="?page=tracking">Theo dõi đơn hàng</a>
											<li class="nav-item">
												<a class="nav-link" href="<?php if(isset($_SESSION['user'])){ echo '?page=tracking';}else{ echo '';}?>">Lịch sử mua hàng</a>
									</ul>
								</li>
							</ul>
						</div>

						<div class="col-lg-5">
							<ul class="nav navbar-nav navbar-right right_nav pull-right">
								<hr>
								<li class="nav-item">
									<a href="?page=search" class="icons">
										<i class="fa fa-search  <?php if($_GET['page'] == 'search'){ echo 'active';}else{ echo '';} ?>" aria-hidden="true"></i>
									</a>
								</li>

								<hr>
								<?php
									$page = isset($_SESSION['user']) ? '?page=logout' : '?page=login';
								?>
								<li class="nav-item">
									<a href="<?php echo $page;?>" class="icons">
										<i class="fa fa-user" aria-hidden="true"><br>
											<?php
												if (isset($_SESSION['user'])) {
													$u = $_SESSION['user'];
													foreach ($u as $key => $row) {
														echo "<span style='font-size: 14px;'>".$row['username']."</span>";
													}
												}
											?>
										</i>
										
									</a>
								</li>

								<hr>

								<li class="nav-item">
									<a href="#" class="icons">
										<i class="fa fa-heart-o" aria-hidden="true"></i>
									</a>
								</li>

								<hr>

								<li class="nav-item">
									<a href="?page=cart" class="icons">
										<i class="lnr lnr lnr-cart">
											<?php
												if (isset($_SESSION['cart']) && $_SESSION['cart']) {
													$cart = count($_SESSION['cart']);
													echo "<span style='font-size:15px\'>(".$cart.")</span>";
												}else{
													echo "<span style='font-size:15px\'>(0)</span>";
												}
											?>
										</i>
									</a>
								</li>

								<hr>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
<!--================Header Menu Area =================-->
