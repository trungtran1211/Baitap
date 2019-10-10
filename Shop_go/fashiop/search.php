<div class="container">
	<div class="row" style="margin-top: 150px">
		<div class="col-3" style=" height: auto;    border: solid 1px;">
			<div class="sidebarhgwrapper">
				<h3 style="    padding-left: 50px;padding-top: 20px;">Loại sản phẩm</h3>
				<hr>
	            <ul class="nagfdv" style="list-style: none;">
	                <?php
						$db = new database();
						$db->select('SELECT * FROM loaigo');
						while($row = $db->fetch()){
					?>
					<li class="nav-item">
						<a class="nav-link" href="?page=search&idloaigo=<?php echo $row['id']?>"><?php echo $row['ten_loai_go']?></a>
					</li>
					<?php
					}
					?>
	            </ul>
	            <hr style="color: red">
	            <h3 style="padding-left: 50px;padding-top: 20px;">Lọc sản phẩm</h3>
				<hr>
	        </div>
	    </div>
		<div class="col-9">
			<div class="s131">
			  <form action="" method="post">
			    <div class="inner-form" >
			      <div class="input-field first-wrap" style="height: 100%;">
			        <input id="search" type="text" name='tu_tim'placeholder="Nhập tên sản phẩm" />
			      </div>
			      <div class="input-field third-wrap" style="height: 45px;">
			        <input class="btn-search" name="search" type="submit" value="Tìm kiếm">
			      </div>
			    </div>
			  </form>
			</div>
			
			<div class="product" style="width: 100%;height: 100%;">
				<form action="" method="POST">
					<div class="row">
					<?php
						if (isset($_POST['search'])) {
							$key = $_POST['tu_tim'];
							$db = new database();
							$db->select("SELECT * FROM sanpham WHERE ten_go LIKE '%$key%'");
							while($row = $db->fetch()){
					?>
						
							<div class="col-4">
								<div class="autoplay slider">
								<div class="f_p_item">
									<div class="f_p_img">
										<a href="?page=single-product&id=<?php echo $row['id']?>">
											<img class="img-fluid" src="../images/<?php echo $row['hinhanh']?>" alt="ảnh sản phẩm">
										</a>
										<div class="p_icon">
											<a href="?page=single-product&id=<?php echo $row['id'] ?>">
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
						
					<?php 
							}
						}
					?>
					<?php
						if (isset($_GET['idloaigo'])) {
							$id = $_GET['idloaigo'];
							$db = new database();
							$db->select("SELECT * FROM sanpham WHERE id_loaigo = ". $id);
							while($row = $db->fetch()){
					?>
						
							<div class="col-4">
								<div class="autoplay slider">
								<div class="f_p_item">
									<div class="f_p_img">
										<a href="?page=single-product&id=<?php echo $row['id']?>">
											<img class="img-fluid" src="../images/<?php echo $row['hinhanh']?>" alt="ảnh sản phẩm">
										</a>
										<div class="p_icon">
											<a href="?page=single-product&id=<?php echo $row['id'] ?>">
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
						
					<?php 
							}
						}
					?>
					</div>
				</form>
			</div>
		</div>	
	</div>
</div>
<script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false
      });

      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
    </script>