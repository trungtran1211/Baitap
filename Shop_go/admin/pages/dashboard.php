
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thống kê doanh thu theo tháng</h1>
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
                                <th>Tên sản phẩm</th>
                                <th>Số lượng còn</th>
                                <th>Số lượng bán</th>
                                <th>Tổng tiền bán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $db = new database();
                                $db->select('SELECT * FROM chitiethoadon');
                                while($row = $db->fetch()) {
                            ?>
                            <tr class="odd gradeX">
                                <td>
                                    <?php
                                        $id = $row['id_sanpham'];
                                        $db->select('SELECT * FROM sanpham WHERE id ='.$id);
                                        $r = $db->fetch();
                                        $tensp = $r['ten_go'];
                                        echo $tensp;
                                    ?>
                                </td>
                                <td> 
                                    <?php
                                        echo $r['so_luong'];
                                    ?>
                                </td>
                                <td><?php echo $r['soluongban']?></td>
                                <td class="center">
                                    <?php
                                    $db->select('SELECT SUM(thanh_tien) FROM chitiethoadon');
                                    $row = $db->fetch();
                                        echo number_format($row['SUM(thanh_tien)'])."đ" ;
                                    ?>
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