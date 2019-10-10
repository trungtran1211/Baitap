
<?php
	$id = $_GET['id'];
	if (isset($id) && $id) {
		$dt = new database();
		$dt->select('SELECT * FROM sanpham WHERE id = '. $id);
		$row = $dt->fetch();
	}
?>
<!--================Home Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-center">
				<h2>Trang sản phẩm</h2>
				<div class="page_link">
					<a href="?page=home">Trang chủ</a>
					<a href="#">Chi tiết sản phẩm</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->

<!--================Single Product Area =================-->
<form action="" method="POST">
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_product_img">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="../images/<?php echo $row['hinhanh']?>" alt="Ảnh sản phẩm">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $row['ten_go'];?></h3>
						<h2><?php echo number_format($row['gia'])."đ";?></h2>
						<ul class="list">
							<li>
									<span style="color: blue" >Trạng Thái :</span> 
									<?php
										if ($row['so_luong']>5) {
											echo "Còn hàng";
										}else if ($row['so_luong']<=5) {
											echo "Sắp hết";
										}else{
											echo "Hết hàng";
										}
									?>
							</li>
							<li>
								<span style="color: blue">Kích thước :</span> 
								<?php echo $row['kich_thuoc']?>
							</li>
							<li>
								<span style="color: blue">Chất liệu :</span> 
								<?php echo $row['chat_lieu'];?>
							</li>
							<li>
								<span style="color: blue">Xuất xứ :</span> 
								<?php echo $row['xuat_xu']?>
							</li>
							<li>
								<span style="color: blue">Chi tiết :</span> 
								<?php echo $row['chi_tiet'];?>
							</li>
						</ul>
						
					</div>
				</div>
				<div class="col-lg-8"></div>
				<div class="card_area ">
					<a href="?page=cart_proccess&id=<?php echo $id?>" class="main_btn">Thêm vào giỏ hàng
					</a>
					<!-- <input type="submit" name="next_cart" class="main_btn" value="Thêm vào giỏ hàng" > -->
				</div>
			</div>
		</div>
	</div>
</form>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Đánh giá</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
				<div class="row">
					<div class="col-lg-6">
						<div class="row total_rate">
							<div class="col-6">
								<div class="box_total">
									<h5>Trung bình</h5>
									<h4>4.0</h4>
									<h6>(03 Đánh giá)</h6>
								</div>
							</div>
							<div class="col-6">
								<div class="rating_list">
									<h3>Lượt đánh giá</h3>
									<ul class="list">
										<li>
											<a href="#">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-star"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="review_list">
							<div class="review_item">
								<div class="media">
									<div class="d-flex">
										<img src="img/product/single-product/review-1.png" alt="">
									</div>
									<div class="media-body">
										<h4>Nguyễn Văn Tú</h4>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
								<p>Tốt</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="review_box">
							<h4>Thêm nhận xét</h4>
							<p>Nhận xét của bạn:</p>
							<ul class="list">
								<li>
									<a href="#">
										<i class="fa fa-star"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-star"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-star"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-star"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-star"></i>
									</a>
								</li>
							</ul>
							<form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="number" name="number" placeholder="Số điện thoại">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="message" id="message" rows="1" placeholder="Nhận xét"></textarea>
									</div>
								</div>
								<div class="col-md-12 text-right">
									<button type="submit" value="submit" class="btn submit_btn">Gửi</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Product Description Area =================-->