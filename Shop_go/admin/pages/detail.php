<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chi tiết đơn hàng</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
                        $id = $_GET['id'];
                        $db = new database();
                        $db->select('SELECT * FROM hoadon WHERE id ='.$id);
                        $row1 = $db->fetch();
                        echo "<label>Tên khách hàng:&nbsp; </label>" .$row1['ten']."<br>";
                        echo "<label>Địa chỉ: &nbsp;</label>" .$row1['diachi']."<br>";
                        echo "<label>Số điện thoại: &nbsp;</label>" .$row1['sdt']."<br>";
                    ?>

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $db->select('SELECT * FROM chitiethoadon WHERE id_hoadon ='.$id);
                                while ($row = $db->fetch()) {
                            ?>
                            <tr class="odd gradeX">
                                <td>
                                    <?php 
                                        $id_sanpham = $row['id_sanpham'];
                                        $dt = new database();
                                        $dt->select('SELECT * FROM sanpham WHERE id ='.$id_sanpham);
                                        $r = $dt->fetch();
                                        echo $r['ten_go'];
                                    ?>
                                </td>
                                <td><?php echo $row['so_luong']?></td>
                                <td><?php echo number_format($row['thanh_tien'])."đ" ?></td>
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