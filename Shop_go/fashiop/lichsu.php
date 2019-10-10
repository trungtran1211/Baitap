 <div class="order_details_table">
                <h2>Lịch sử mua hàng</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Ngày mua</th>
                                <th scope="col">Tổng tiền</th>
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