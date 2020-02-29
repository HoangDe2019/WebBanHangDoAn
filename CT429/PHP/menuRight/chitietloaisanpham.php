<?php
    $sql_chitiet="select * from hanghoa where MaNhom='$_GET[id]'";
    $query=mysqli_query($connect, $sql_chitiet);
?>
<?php
    $sql_loaisp="select * from nhomhanghoa where MaNhom='$_GET[id]'";
    $query_loaisp=mysqli_query($connect, $sql_loaisp);
    $dong_loaisp=mysqli_fetch_array($query_loaisp);
?>

<p style="text-align:center;color:blue;background:#0CF;padding:10px;" ><?php echo $dong_loaisp['TenNhom']?></p>

<div class="sanphamall">
    <ul>
        <?php
            while ($dong_chitiet=mysqli_fetch_array($query)) {
                ?>
                <li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['MSHH']?>">
                        <img
                            src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['Hinh']?>"
                            width="100" height="100"/>
                        <p><?php echo $dong_chitiet['TenHH']?></p>
                        <p style="color:#F00;">Giá sp:<?php echo $dong_chitiet['Gia']?></p>
                        <p style="color:#F00;text-align:center">Chi tiết</p>
                    </a></li>
                <?php
            }
        ?>
    </ul>
</div>

