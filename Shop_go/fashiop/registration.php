<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$passwordcf = md5($_POST['passwordcf']);
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$kq ="";
		$db = new database();
		$db->select("SELECT COUNT(*) AS total FROM khachhang_users WHERE username = "."'".$username."'");
    	$total = $db->fetchFirst();
		if(empty($username)||empty($password)||empty($phone)||empty($address)||empty($email)){
			$kq = "Vui lòng điền đầy đủ thông tin"; 
		}elseif($total == 1) {
			$kq = "Tên đăng nhập đã tồn tại";
		}elseif($password != $passwordcf){
			$kq = "Mật khẩu không khớp";
		}
		else{
			$sql = "INSERT INTO khachhang_users(name, username, email, diachi, sdt, password) VALUES('$name', '$username', '$email', '$address', '$phone', '$password')";
			$_SESSION['khachhang_users'] = $username;
			$db->command($sql);
			echo "<script language='javascript'>alert('Đăng ký thành công')</script>";
		}
		
	}
?>
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Login/Registe</h2>
					<div class="page_link">
						<a href="?page=trangchu">Home</a>
						<a href="registration.html">Register</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<a class="main_btn" href="#">Tạo tài khoản</a>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="login_form_inner reg_form">
						<h3>Create an Account</h3>
						<form class="row login_form" action="" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Tên người nhận">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="fullname" name="username" placeholder="Tên đăng nhập">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pass" name="passwordcf" placeholder="Nhập lại mật khẩu">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Số điên thoại">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="Address" name="address" placeholder="Địa chỉ nhận hàng">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Giữ đăng nhập</label><br>
									<span style="color: red;"><?php if(isset($_POST['submit'])){ echo '*'.$kq; }?></span>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<!-- <button type="submit" value="submit" name="submit" class="btn submit_btn">Đăng ký</button> -->
								<input type="submit" name="submit" class="btn submit_btn">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
