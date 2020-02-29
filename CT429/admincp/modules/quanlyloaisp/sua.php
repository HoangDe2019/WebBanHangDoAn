<?php 
	$sql="select * from nhomhanghoa where MaNhom=$_GET[id]";
	$run=mysqli_query($connect,$sql);
	$dong = mysqli_fetch_array($run, MYSQLI_NUM);
?>
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['MaNhom'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa loại sp</div></td>
  </tr>
  <tr>
		<td>Tên Nhóm</td>
    <td><input type="text" name="TenNhom" value="<?php echo $dong['TenNhom'] ?>" ></td>
  </tr>
  <tr>
    
        <td>Thứ tự</td>
    <td><input type="text" name="ThuTu" value="<?php echo $dong['ThuTu'] ?>" ></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>