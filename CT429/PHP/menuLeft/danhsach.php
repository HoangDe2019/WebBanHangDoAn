<?php
    $sql_loaisp="select * from nhomhanghoa";
    $query=mysqli_query($connect, $sql_loaisp);
?>
        	<p style="text-align:center;color:blue;background:#0CF;padding:10px;">Loại Sản phẩm</p>
            <div class="danhsachsanpham">
            	<ul>
                    <?php
                        while ($dong_sp=mysqli_fetch_array($query)) {
                            ?>
                            <li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['MaNhom'] ?>"><?php echo $dong_sp['TenNhom']?></a></li>
                            <?php
                        }
                    ?>
                </ul>
            </div><!--Kết thúc loại sản phẩm-->
            <p style="text-align:center;color:blue;background:#0CF;padding:10px;">Hiệu sản phẩm</p>
            <div class="danhsachsanpham">
            	<ul>
                	<li><a href="#">Honda</a></li>
                    <li><a href="#">GXT</a></li>
                    <li><a href="#">Asia</a></li>
                    <li><a href="#">Yohe</a></li>
                </ul>
            </div><!--Kết thúc loại sản phẩm-->
