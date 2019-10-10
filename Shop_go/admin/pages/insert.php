<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm mới sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input class="form-control" type="text" name="nameProduct" placeholder="Nhập tên sản phẩm">
                                </div>
                                
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input class="form-control" name="quantity" placeholder="Số lượng" type="number">
                                </div>
                                <div class="form-group">
                                    <label>Chất liệu</label>
                                    <input class="form-control" name="chatlieu" placeholder="Chất liệu">
                                </div>
                                <div class="form-group">
                                    <label>Kích thước</label>
                                    <input class="form-control" name="kichthuoc" placeholder="Kích thước">
                                </div>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Xuất sứ</label>
                                    <input class="form-control" name="xuatxu" placeholder="Xuất sứ">
                                </div>
                                <div class="form-group">
                                    <label>Loại gỗ</label>
                                    <!-- <input class="form-control" name="categoryId" placeholder="Loại gỗ"> -->
                                    <select name="categoryId" class="form-control">
                                        <?php
                                            $dt = new database();
                                            $dt->select('SELECT * FROM loaigo');
                                            while ($r = $dt->fetch()) {
                                        ?>
                                        <option value="<?php echo $r['id']?>"><?php echo $r['ten_loai_go']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Giá bán</label>
                                    <input class="form-control" name="price" placeholder="Giá bán">
                                </div>
                               <div class="form-group">
                                    <label>Chọn hình ảnh</label>
                                    <input type="file" name="image" />
                                </div>
                                <div class="form-group">
                                    <label>Sản phẩm nổi bật</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>Nổi bật
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="0">Bình thường
                                        </label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Chi tiết sản phẩm</label>
                                    <textarea class="form-control" rows="3" name="detailProduct" style="height: 500px">
                                        
                                    </textarea>
                                </div>
                                <input type="submit" class="btn btn-primary " name="btn-them" value="Cập nhật" style="float: right;">
                            </div>
                        </form>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
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
<?php
    if (isset($_POST['btn-them'])) {
        $nameProduct = $_POST['nameProduct'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $chatlieu = $_POST['chatlieu'];
        $xuatxu = $_POST['xuatxu'];
        $kichthuoc = $_POST['kichthuoc'];
        $categoryId = $_POST['categoryId'];
        $noibat = $_POST['optionsRadios'];
        $detailProduct = $_POST['detailProduct'];
        $image = $_FILES['image'];
        if($image['name'] != ""){
            $picture = $image['name'];
            $tmp_name = $image['tmp_name'];
            $pathpic=$_SERVER['DOCUMENT_ROOT'] . '/Shop_go/images/' . $picture;
            move_uploaded_file($tmp_name , $pathpic);
        }
        $db = new database();
        $db->select("SELECT COUNT(*) AS total FROM sanpham WHERE ten_go = "."'".$nameProduct."'");
        $total = $db->fetchFirst();
        if(empty($nameProduct)||empty($categoryId)||empty($quantity)||empty($price)){
            echo "Yêu cầu nhập đầy đủ thông tin";
        }elseif ($total == 1) {
            $db->select("SELECT * FROM sanpham WHERE ten_go ="."'". $nameProduct."'");
            $row = $db->fetch();
            $quantity += $row['so_luong'];
            $sl = "UPDATE sanpham SET so_luong = ".$quantity." WHERE ten_go = "."'". $nameProduct."'";
            echo "<script language='javascript'>alert('Sản phẩm đã tồn tại. Số lượng đã được cập nhật');</script>";
        }
        else{
            $sl = "INSERT INTO sanpham(ten_go,  hinhanh, so_luong, chi_tiet, gia, noi_bat, kichthuoc, chatlieu, xuatxu) VALUES('$nameProduct', '$picture', $quantity, '$detailProduct', $price, $noibat, '$kichthuoc', '$chatlieu', '$xuatxu')";
            echo "<script language='javascript'>alert('Thêm thành công');</script>";
        }
        $db->command($sl);
    }
?>
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<!-- <script src="js/tinymce.min.js" referrerpolicy="origin"></script> -->
 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>