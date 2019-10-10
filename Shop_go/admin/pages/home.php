<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa xóa sản phẩm</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông tin cần sửa
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <form role="form" action="" method="POST" enctype="multipart/form-data">
                            <?php 
                                if (isset($_GET['id']) && $_GET['id']) {
                                    $id = $_GET['id'];

                                    $dt = new database();
                                    $dt->select('SELECT * FROM sanpham WHERE id = '.$id);
                                    $row = $dt->fetch();
                                }
                            ?>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input class="form-control" type="text" name="nameProduct" placeholder="Nhập tên sản phẩm" value="<?php if(isset($id)){ echo $row['ten_go'];}?>">
                                </div>
                                
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input class="form-control" name="quantity" placeholder="Số lượng" value="<?php if(isset($id)){ echo $row['so_luong'];}?>">
                                </div>
                                <div class="form-group">
                                    <label>Chất liệu</label>
                                    <input class="form-control" name="chatlieu" placeholder="Chất liệu" value="<?php if(isset($id)){ echo $row['chat_lieu'];}?>">
                                </div>
                                <div class="form-group">
                                    <label>Kích thước</label>
                                    <input class="form-control" name="kichthuoc" placeholder="Kích thước" value="<?php if(isset($id)){ echo $row['kich_thuoc'];}?>">
                                </div>
                            </div>
                        <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Xuất sứ</label>
                                    <input class="form-control" name="xuatxu" placeholder="Xuất sứ" value="<?php if(isset($id)){ echo $row['xuat_xu'];}?>">
                                </div>
                                <div class="form-group">
                                    <label>Loại gỗ</label>
                                    <!-- <input class="form-control" name="categoryId" placeholder="Loại gỗ"> -->
                                    <select name="categoryId" class="form-control">
                                        <?php
                                            $idloaigo = $_GET['idloaigo'];
                                            $dt = new database();
                                            $dt->select('SELECT * FROM loaigo ');

                                            while ($r = $dt->fetch()) {
                                        ?>
                                        <option value="<?php echo $r['id']?>">
                                            <?php echo $r['ten_loai_go']?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Giá bán</label>
                                    <input class="form-control" name="price" placeholder="Giá bán" value="<?php if(isset($id)){ echo $row['gia'];}?>">
                                </div>
                                <div class="form-group" >
                                    <img src="<?php if(isset($id)){echo '../../images/';echo $row['hinhanh'];}?>" style="width: 100px">
                                </div>
                               <div class="form-group">
                                    <label>Chọn hình ảnh</label>
                                    <input type="file" name="image">
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
                                        <?php if(isset($id)){ echo $row['chi_tiet'];}?>
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
                                <th>Id sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Chất liệu</th>
                                <th>Chi tiết</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $db = new database();
                                $db->select('SELECT * FROM sanpham');
                                while ($row = $db->fetch()) {
                            ?>
                            <tr class="odd gradeX">
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['ten_go']?></td>
                                    <td><?php echo $row['gia']?></td>
                                    <td class="center"><?php echo $row['chat_lieu']?></td>
                                    <td class="center" ><span style="white-space: nowrap; width: 420px; overflow: hidden;text-overflow: ellipsis;float: left;"><?php echo $row['chi_tiet']?></td>
                                <td class="center">
                                    <a href="?page=home_code&id=<?php echo $row['id']?>&id_loaigo=<?php echo $row['id_loaigo']?>" style="color: red;text-decoration: none;">Sửa</a>
                                </td>
                                <td class="center">
                                    <a onclick="check()" href="?page=delete&id=<?php echo $row['id'];?>" style="color: red;text-decoration: none;">Xóa</a>
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
<?php
    if (isset($_POST['btn-sua'])) {
        $id = $_GET['id'];
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
            $sl = "UPDATE sanpham SET ten_go = '$nameProduct', id_loaigo = $categoryId, so_luong = $quantity, noi_bat = $noibat, chi_tiet = '$detailProduct',hinhanh = '$picture', gia = $price, chat_lieu = '$chatlieu', xuat_xu = '$xuatxu', kich_thuoc = '$kichthuoc' WHERE id =".$id;
        }else{
            $sl = "UPDATE sanpham SET ten_go = '$nameProduct', id_loaigo = $categoryId, so_luong = $quantity, noi_bat = $noibat, chi_tiet = '$detailProduct', gia = $price, chat_lieu = '$chatlieu', xuat_xu = '$xuatxu', kich_thuoc = '$kichthuoc' WHERE id =".$id;
        }
        $db = new database();
        $db->command($sl);
        echo "<script language='javascript'>alert('Sửa thành công');";
        echo "location.href='?page=home&id=$id';</script>";
    }
?>

<!-- jQuery -->
<script type="text/javascript">
    function check() {
        alert('Bạn có chắc muốn xóa không?');
    }
    /*function get() {
        <?php
            $id = $_GET['id'];
            if (isset($id) && $id) {
                $dt = new database();
                $dt->select('SELECT * FROM sanpham WHERE id = '. $id);
                $row = $dt->fetch();
                $item = array(
                    'id' => $row['id'],
                    'categoryId' => $row['id_loaigo'],
                    'nameProduct' => $row['ten_go'],
                    'price' => $row['gia'],
                    'quantity' => $row['so_luong'],
                    'color' => $row['mausac'],
                    'detailProduct' => $row['chi_tiet']
                );
                $products[$row['id']] = $item;
                $_SESSION['update'] = $products;
            }
        ?>
    }*/
</script>
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>