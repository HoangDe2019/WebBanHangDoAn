<?php
    $sql_all="select * from hanghoa";
    $query_all=mysqli_query($connect, $sql_all);
?>
    <p style="text-align:center;color:blue;background:#0CF;padding:10px;" >Tất cả sản phẩm</p>
    <div class="sanphamall">
        <ul>
            <?php
            while ($dong_all=mysqli_fetch_array($query_all)) {
                ?>
                <li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all['MSHH']?>">
                        <img
                            src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['Hinh']?>"
                            width="100" height="100"/>
                        <p><?php echo $dong_all['TenHH']?></p>
                        <p style="color:#F00;">Giá sp:<?php echo $dong_all['Gia']?></p>
                        <p style="color:#F00;text-align:center">Chi tiết</p>
                    </a></li>
                <?php
            }
            ?>
        </ul>
    </div>

