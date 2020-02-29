<?php
    $sql="select * from hanghoa, nhomhanghoa where nhomhanghoa.MaNhom=hanghoa.MaNhom order by hanghoa.MSHH desc ";
    $run=mysqli_query($connect, $sql);
?>
<table width="100%" border="1">
  <tr>
    <td><div align="center"><b>MSHH</b></div></td>
    <td><div align="center"><b>Tên SP</b></div></td>
    <td><div align="center"><b>Hình ảnh</b></div></td>
    <td><div align="center"><b>Giá</b></div></td>
    <td><div align="center"><b>Hãng SP</b></div></td>
    <td><div align="center"><b>Số lượng</b></div></td>
    <td colspan="3"><div align="center"><b>Quản lý</b></div></td>
  </tr>
    <?php
        $i=0;
        while ($dong=mysqli_fetch_array($run)) {
            ?>
            <tr>
                <td align="center">
                   <?php echo $i; ?>
                </td>
                <td align="center">
                  <?php echo $dong['TenHH']; ?>
                </td>
                <td align="center">
                    <img src="modules/quanlychitietsp/uploads/<?php echo $dong['Hinh'];?>" width="60" height="60">
                </td>
                <td align="center">
                   <?php echo $dong['Gia']; ?>
                </td>
                <td align="center">
                    <?php echo $dong['TenNhom']; ?>
                </td>
                <td align="center">
                   <?php echo $dong['SoLuongHang']; ?>
                </td>
                <td><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['MSHH'] ?>" >Sửa</a></td>
                <td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['MSHH']?>">Xóa</a></td>
            </tr>
            <?php
            $i++;
        }
    ?>
</table>
