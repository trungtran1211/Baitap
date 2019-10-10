<?php 

	if(isset($_POST['submit'])){
		$username =$_POST['username'];
		$password =md5($_POST['password']);
		$db = new database();
		$db->select('SELECT * FROM khachhang_users');
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
			$_SESSION['user'] = $user;/*
			$u = $_SESSION['user'];
			foreach ($u as $key => $row) {
				echo $row['id'];
				echo $row['name'];
			}*/
	    	echo "<script type='text/javascript'>location.href='?page=home'</script>";
		}
	}
?>

<!--================Home Banner Area =================-->
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content text-center">
				<h2>Đăng nhập/ Đăng ký</h2>
				<div class="page_link">
					<a href="?page=home">Trang chủ</a>
					<a href="?page=login">Đăng nhập</a>
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
						<h4>Bạn chưa có tài khoản?</h4>
						<a class="main_btn" href="?page=registration">Đăng ký tài khoản</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<h3>Đăng nhập để vào</h3>
					<form class="row login_form" action="" method="POST" id="contactForm" novalidate="novalidate">
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="name" name="username" placeholder="Username">
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
						<div class="col-md-12 form-group">
							<div class="creat_account">
								<input type="checkbox" id="f-option2" name="selector">
								<label for="f-option2">Giữ đăng nhập</label>
							</div>
							<label style="text-align: center;color: #e4922c;"><?php  if(isset($kq)) echo $kq; ?></label>
						</div>
						<div class="col-md-12 form-group">
							<input type="submit" name="submit" class="btn submit_btn" value="Đăng nhập">
							<a href="#">Quên mật khẩu?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->