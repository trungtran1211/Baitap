
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Theo dõi đơn hàng</h2>
                    <div class="page_link">
                        <a href="?page=home">Trang chủ</a>
                        <a href="tracking.html">Theo dõi đơn hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Tracking Box Area =================-->
    <section class="tracking_box_area p_120" style="padding-bottom: 0px">
        <div class="container">
            <div class="tracking_box_inner">
                <p>Để theo dõi đơn hàng của bạn, vui lòng nhập Mã hóa đơn của bạn vào ô bên dưới.</p>
                <form class="row tracking_form" action="" method="post" novalidate="novalidate">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="order" name="order" placeholder="Mã hóa đơn">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="btn submit_btn" name="submit">Theo dõi</button>
                        <!-- <input class="btn submit_btn" type="submit" name="submit"> -->
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--================End Tracking Box Area =================-->
     <?php
        if (isset($_POST['submit'])) {
            $order = $_POST['order'];
    ?>
    <section class="order_details p_120" style="padding-top: 60px">
        <div class="container">
            <h3 class="title_confirmation">Đơn hàng.</h3>
            <div class="row order_d_inner">
                <div class="col-lg-6">
                    <div class="details_item">
                        <?php
                            /*
                            $db = new database();
                            $db->select('SELECT max(id) FROM hoadon ');
                            $r = $db->fetch();
                            $id = $r['max(id)'];*/
                            $db = new database();
                            $db->select('SELECT * FROM hoadon WHERE id ='.$order);
                            $row = $db->fetch();
                        ?>
                        <h4>Thông tin đặt hàng</h4>
                        <ul class="list">
                            <li>
                                <a href="#">
                                    <span>Mã hóa đơn</span> : <?php echo $row['id']?></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Ngày đặt hàng</span> : <?php echo $row['created_at']?></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Tổng tiền</span> : <?php echo number_format($row['tong_tien'])."đ" ?></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Phương thức TT</span> : 
                                    <?php 
                                        $thanhtoan = $row['thanh_toan'];
                                        if ($thanhtoan == 1) {
                                            echo "Thanh toán khi nhận hàng";
                                        }else{
                                            echo "Thanh toán online";
                                        }
                                    ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4>Thông tin người nhận</h4>
                        <ul class="list">
                            <li>
                                <a href="#">
                                    <span>Tên người nhận</span> : <?php echo $row['ten']?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Dịa chỉ</span> : <?php echo $row['diachi']?></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Số điện thoại</span> : <?php echo $row['sdt']?></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Tình trạng đơn hàng</span> : 
                                    <?php 
                                        $trangthai = $row['trang_thai'];
                                        if ($trangthai == 1) {
                                            echo "Đang chờ duyệt";
                                        }elseif ($trangthai == 2) {
                                            echo "Đã duyệt";
                                        }elseif ($trangthai == 3) {
                                            echo "Đang giao";
                                        }else{
                                            echo "Đã giao";
                                        }
                                    ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order_details_table">
                <h2>Chi tiết hóa đơn</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Giá tiền</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $db->select('SELECT * FROM chitiethoadon WHERE id_hoadon ='.$order);
                                    while ($ro = $db->fetch()) {
                                ?>
                                <td>
                                    <p>
                                        <?php 
                                            $dt = new database();
                                            $dt->select('SELECT * FROM sanpham WHERE id ='.$ro['id_sanpham']);
                                            $sl = $dt->fetch();
                                            echo $sl['ten_go'];
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <p><?php echo number_format($sl['gia'])."đ" ?></p>
                                </td>
                                <td>
                                    <p><?php echo "x".$ro['so_luong']?></p>
                                </td>
                                <td>
                                    <p><?php echo number_format($ro['thanh_tien'])."đ"; ?></p>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                            <tr>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <h4>Tổng tiền :</h4>
                                </td>
                                <td>
                                    <h5 style="color: red"><?php echo number_format($row['tong_tien'])."đ";?></h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    ?>