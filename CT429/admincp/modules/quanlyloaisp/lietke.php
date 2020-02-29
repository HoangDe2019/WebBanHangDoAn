<?php 
	$sql="select * from nhomhanghoa";
	$run=mysqli_query($connect,$sql);
?>
<table width="100%" border="1">
  <tr>
    <td><div align="center">Mã Nhóm</div></td>
    <td><div align="center">Tên Nhóm</div></td>
      <td><div align="center">Thứ tự</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
	while($dong = mysqli_fetch_array($run)){
  ?>
  <tr>
    <td align="center"><?php echo $dong['MaNhom'] ?> </td>
    <td align="center"><?php echo $dong['TenNhom'] ?> </td>
      <td align="center"><?php echo $dong['ThuTu'] ?> </td>
    <td><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['MaNhom']?>">Sửa</td>
    <td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['MaNhom']?>">Xóa</td>
  </tr>
  <?php
  ;}
  ?>
</table>
