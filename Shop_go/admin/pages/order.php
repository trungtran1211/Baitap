<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý đơn hàng</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sản phẩm
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoai</th>
                                <th>Địa chỉ</th>
                                
                                <th>HT Thanh toán</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $db = new database();
                                $db->select('SELECT * FROM hoadon');
                                while ($row = $db->fetch()) {
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $row['ten']?></td>
                                <td><?php echo $row['sdt']?></td>
                                <td><?php echo $row['diachi']?></td>
                                <td class="center">
                                    <?php 
                                        $thanhtoan = $row['thanh_toan'];
                                        if ($thanhtoan == 1) {
                                            echo "TT khi nhận hàng";
                                        }else{
                                            echo "TT online";
                                        }
                                    ?>
                                    
                                </td>
                                <td class="center" ><?php echo number_format($row['tong_tien'])."đ" ?></td>
                                <td style="color: blue">
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
                                </td>
                                <td class="center">
                                    <a href="<?php if($trangthai == 1){ echo '?page=duyet&id='.$row["id"];}else{ echo '';}?>" style="color: red;text-decoration: none;">Duyệt</a>
                                </td>
                                <td class="center">
                                    <a href="?page=detail&id=<?php echo $row['id']?>" style="color: red;text-decoration: none;">Chi tiết</a>
                                </td>
                                <td class="center">
                                    <a href="?page=delete-order&id=<?php echo $row['id']?>" style="color: red;text-decoration: none;" onclick="check()">X</a>
                                </td>

                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                   
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<script type="text/javascript">
    function check() {
        confirm("Bạn có chắc muốn xóa không");
    }
</script>
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>