
<style>
	body {
	  font-family: Arial;
	  font-size: 17px;
	  padding: 8px;
	}

	* {
	  box-sizing: border-box;
	}

	.row {
	  display: -ms-flexbox; /* IE10 */
	  display: flex;
	  -ms-flex-wrap: wrap; /* IE10 */
	  flex-wrap: wrap;
	  margin: 0 -16px;
	}

	.col-25 {
	  -ms-flex: 25%; /* IE10 */
	  flex: 25%;
	}

	.col-50 {
	  -ms-flex: 50%; /* IE10 */
	  flex: 50%;
	}

	.col-75 {
	  -ms-flex: 75%; /* IE10 */
	  flex: 75%;
	}

	.col-25,
	.col-50,
	.col-75 {
	  padding: 0 16px;
	}


	input[type=text] {
	  width: 100%;
	  margin-bottom: 20px;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 3px;
	}

	.icon-container {
	  margin-bottom: 20px;
	  padding: 7px 0;
	  font-size: 24px;
	}

	.btn {
	  background-color: #4CAF50;
	  color: white;
	  padding: 12px;
	  margin: 10px 0;
	  border: none;
	  width: 100%;
	  border-radius: 3px;
	  cursor: pointer;
	  font-size: 17px;
	}

	.btn:hover {
	  background-color: #45a049;
	}

	a {
	  color: #2196F3;
	}

	span.price {
	  float: right;
	  color: grey;
	}

	/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
	@media (max-width: 800px) {
	  .row {
	    flex-direction: column-reverse;
	  }
	  .col-25 {
	    margin-bottom: 20px;
	  }

	}
	.icon{
	  	width: 72px ;
	  	height: 38px; 
	  	border: solid 1px red;
	  }
	  .icon:hover{
	  	border: solid 1px blue;
	  }
</style>
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Trang thanh toán</h2>
					<div class="page_link">
						<a href="?page=home">Trang chủ</a>
						<a href="checkout.php">Thanh toán</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Checkout Area =================-->
	<section class="checkout_area section_gap">
		<div class="container">
			<div class="returning_customer">
				<div class="check_title">
					<h2>Bạn đã có tài khoản?</h2>
				</div>
				<form class="row contact_form" action="" method="post" novalidate="novalidate">
					<div class="col-md-6 form-group p_star">
						<input type="text" class="form-control" id="name" name="username_login" placeholder="Username">
					</div>
					<div class="col-md-6 form-group p_star">
						<input type="password" class="form-control" id="password" name="password_login" placeholder="Password">
					</div>
					<br>
						<label style="margin-left: 50px;color: red;"><?php  if(isset($kq)) echo "*".$kq; ?></label>
					<div class="col-md-12 form-group">
						<!-- <button type="submit" value="submit" class="btn submit_btn" name="submit_login">Đăng nhập</button>  -->
						<input style="color: #fff" type="submit" class="submit_btn " name="submit_login" value="Đăng nhập">
						<div class="creat_account">
							<input type="checkbox" id="f-option" name="selector">
							<label for="f-option">Giữ đăng nhập</label>

						</div>
					</div>
				</form>
				<p>Nếu bạn là khách hàng mới, vui lòng nhập thông tin để mua hàng hoặc <a href="?page=registration">Đăng ký</a> để sử dụng được nhiều chức năng trên website hơn.</p>
				
			</div>
			
			<div class="billing_details">
				<div class="row">
					<form class="row contact_form" action="#" method="post" novalidate="novalidate">
						<div class="col-lg-8">
							<h3>Chi tiết thanh toán</h3>
							
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" id="first" name="name" placeholder="Họ tên">
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" id="number" name="phone" placeholder="Số điện thoại">
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" id="email" name="email" placeholder="Email">
								</div>
								<div class="col-md-12 form-group p_star">
									<input type="text" class="form-control" id="add1" name="diachi" placeholder="Địa chỉ">
								</div>
								<div class="col-12">
									<h3>Hình thức thanh toán</h3>
								</div>
								<div class="col-12">
										<input type="radio" name="gender" value="1" onclick="thanhtoannone()" checked>
										<label>Thanh toán khi nhận hàng</label><br>
										<input type="radio" name="gender" value="2" onclick="thanhtoanblock()">
										<label>Thanh toán online</label>
								</div>
								<ul class="nav nav-tabs" id="myTab" role="tablist" style="display: none;">
									<li class="nav-item" style="border: solid 1px #b9b2b2">
										<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Thông tin chủ thẻ</a>
										<div class="col-50">
								            <label for="fname">Thẻ được hổ trợ</label>
								            <div class="row" style="margin-bottom: 10px">
								            		
								            	<!-- <div class="row">
								            		<div class="text-center" style="margin: 0px 5px;">
								            			<div class="icon">
								            			<img src="../images/agribank.jpg" alt="" style="width: 70px">
								            			</div>
								            			<span style="font-size: 14px;">Aribank</span>
								            		</div>
								            	</div> -->
								            	<div class="col-50" >
								            	<select name="nganhang" id="" class="form-control" >
								            		<option value="Aribank">Aribank</option>
								            		<option value="ViettinBank">ViettinBank</option>
								            		<option value="Vietcombank">Vietcombank</option>
								            		<option value="ACB">ACB</option>
								            		<option value="BIDV">BIDV</option>
								            	</select>
								            	</div>
								            </div>
								            <label for="cname">Tên chủ thẻ</label>
								            <input type="text" id="cname" class="form-control" name="cardname" placeholder="Tên chủ thẻ">
								            <label for="ccnum">Số thẻ tín dụng</label>
								            <input type="text" id="ccnum" class="form-control" name="cardnumber" placeholder="9704 1111 2111">
								            <label for="expmonth">Ngày mở thẻ</label>
								            <input type="text" id="expmonth" class="form-control" name="expmonth" placeholder="Ngày mở thẻ">
								        </div>
								        <div class="row">
									        <div class="col-lg-4">
									        </div>
									        <div class="col-lg-4">
									        	<input type="submit" value="Continue to checkout" class="btn">
									        </div>
								        </div>
									</li>
								</ul>
							
							<!-- <div class="tab-pane fade show active hidel" id="review" role="tabpanel" aria-labelledby="review-tab" style="display: none;">
								<div class="row">
									<div class="col-lg-6">
										<h4>Thanh toán online</h4>
										<p>Nhập mã số thẻ</p>
									</div>
								</div>
							</div> -->
						</div>
						<div class="col-lg-4">
							<div class="order_box">
								<h2>Đơn hàng của bạn</h2>
								<ul class="list">
									<li>
										<a href="#">Sản phẩm
											<span>Thành tiền</span>
										</a>
									</li>
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
									<li>
										<a href="#"><span style="white-space: nowrap; width: 110px; overflow: hidden;text-overflow: ellipsis;float: left;"><?php echo $row['tensp']?></span>
											<span class="middle"><?php echo "x".$row['soluong']?></span>
											<span class="last"><?php echo number_format($item_total)."đ";?></span>
										</a>
									</li>
									<?php 
										}
									?>
								</ul>
								<ul class="list list_2">
									<li>
										<a href="#">Phí giao hàng
											<span>
												<?php 
													echo number_format('85000')."đ";
												?>	
											</span>
										</a>
									</li>
									<li>
										<a href="#">Tổng cộng
											<span>
												<?php 
													$tongtien += $total + 85000;
													echo number_format($tongtien)."đ";
												?>	
											</span>
										</a>
									</li>
								</ul>
								<!-- <a class="main_btn" href="#">Thanh toán</a> -->
								<input type="submit" name="submit_checkout" class="main_btn" value="Thanh toán">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================End Checkout Area =================-->
<script type="text/javascript">
	function thanhtoanblock() {
		document.getElementById("myTab").style.display="block";
	}
	function thanhtoannone() {
		document.getElementById("myTab").style.display="none";
	}
	/*<?php
		if (isset($_POST['gender'])) {
	?>
			document.getElementById("review").style.display="block";
			document.getElementById("myTab").style.display="block";
	<?php
		}
	?>*/
</script>
<?php 

	if(isset($_POST['submit_login'])){
		$username =$_POST['username_login'];
		$password =md5($_POST['password_login']);
		$db = new database();
		$sql = $db->select('SELECT * FROM khachhang_users');
		$row = $db->fetch();
			if (empty($username) || empty($password)) {
				$kq = "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu";
			}
		   	else if ($username != $row['username'] || $password != $row['password']) {
		        $kq = "Tài khoản không đúng";
		    }
		   	else{ 
		    	$item = array(
		   			'id' => $row['id'],
		   			'name' => $row['name'],
		   			'username' => $row['username'],
		   			'sdt' => $row['sdt'],
		   			'diachi' => $row['diachi']
		   		);
		   		$user[$row['id']] = $item;
				$_SESSION['user'] = $user;
		    	echo "<script type='text/javascript'>alert('Đăng nhập thành công');";
		    	echo "location.href='?page=update_cart';</script>";
			}
	}
	//-------------------------
	if (isset($_POST['submit_checkout'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$thanhtoan = $_POST['gender'];
		$diachi = $_POST['diachi'];
		if (isset($_SESSION['user'])) {
			$u = $_SESSION['user'];
			foreach ($u as $key => $row) {
				$id = $row['id'];
				$sdt = $row['sdt'];
				$diachi = $row['diachi'];
				$name = $row['name']; 
				$dt = new database(); 
				$sql = "INSERT INTO hoadon(id_user, ten, sdt, diachi, thanh_toan, tong_tien) VALUES('$id', '$name', '$sdt', '$diachi', '$thanhtoan', '$tongtien')";
				$dt->command($sql);
		        $dt->select('SELECT max(id) FROM hoadon');
		        $sl = $dt->fetch();
		        $idhoadon = $sl['max(id)'];
		        
		        $carts = isset($_SESSION['cart']) && $_SESSION['cart']? $_SESSION['cart'] : [];
		        foreach ($carts as $key => $row) {

		        	$idsanpham = $row['id'];
		        	$soluong = $row['soluong'];
		        	$item_total = $row['giatien'] *  $row['soluong'];
					$total += $item_total;
		        	
		        	$sl = "INSERT INTO chitiethoadon(id_hoadon, id_sanpham, so_luong, thanh_tien) VALUES('$idhoadon','$idsanpham', '$soluong', '$item_total')";
		        	$db = new database();
		        	$db->command($sl);
		        	$db->select('SELECT * FROM sanpham WHERE id ='.$idsanpham);
		        	$r = $db->fetch();
		        	$slcon = $r['so_luong'] - $soluong;
		        	$slban = $r['soluongban'] + $soluong;
		        	$sql = "UPDATE sanpham SET so_luong = '$slcon', soluongban = '$slban' WHERE id =".$idsanpham;
		        	$db->command($sql);
		        }
	        }
	        unset($_SESSION['cart']);
			echo "<script type='text/javascript'>alert('Đặt hàng thành công')</script>";
			echo "<script type='text/javascript'>location.href='?page=confirmation'</script>";
		}elseif (empty($name) || empty($phone) || empty($email) || empty($diachi)) {
			echo "<script type='text/javascript'>alert('Nhập đầy đủ thông tin')</script>";
		}else{
			$dt = new database();
			$sql = "INSERT INTO hoadon(ten, sdt, diachi, thanh_toan, tong_tien) VALUES('$name', '$phone', '$diachi', '$thanhtoan', '$tongtien')";
			$dt->command($sql);
	        /*$sl = ("SELECT SCOPE_IDENTITY() as id");
	        $result = $dt->command($sql);
	        echo $result;*/
	        $dt->select('SELECT max(id) FROM hoadon');
	        $sl = $dt->fetch();
	        $idhoadon = $sl['max(id)'];
	        
	        $carts = isset($_SESSION['cart']) && $_SESSION['cart']? $_SESSION['cart'] : [];
	        foreach ($carts as $key => $row) {

	        	$idsanpham = $row['id'];
	        	$soluong = $row['soluong'];
	        	$item_total = $row['giatien'] *  $row['soluong'];
				$total += $item_total;
	        	
	        	$sl = "INSERT INTO chitiethoadon(id_hoadon, id_sanpham, so_luong, thanh_tien) VALUES('$idhoadon','$idsanpham', '$soluong', '$item_total')";
	        	$db = new database();
	        	$db->command($sl);
	        	$db->select('SELECT * FROM sanpham WHERE id ='.$idsanpham);
	        	$r = $db->fetch();
	        	$slcon = $r['so_luong'] - $soluong;
	        	$slban = $r['soluongban'] + $soluong;
	        	$sql = "UPDATE sanpham SET so_luong = '$slcon', soluongban = '$slban' WHERE id =".$idsanpham;
	        	$db->command($sql);
	        }
	        unset($_SESSION['cart']);
			echo "<script type='text/javascript'>alert('Đặt hàng thành công')</script>";
			echo "<script type='text/javascript'>location.href='?page=confirmation'</script>";
		}
	}

?>