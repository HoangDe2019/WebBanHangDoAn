<?php
    $sql_chitietsp="select * from hanghoa where MSHH=$_GET[id]";
    $query_chitietsp=mysqli_query($connect, $sql_chitietsp);
    $dong_chitietsp=mysqli_fetch_array($query_chitietsp);
?>
<table width="400" border="1" style="border-collapse:collapse">
  <tr>
    <td colspan="2"><div align="center">
      <h4>Chi tiết sản phẫm</h4>
    </div></td>
  </tr>
  <tr>
    <td rowspan="2"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['Hinh']?>" width="200" height="200"/> </td>
    <td>Tên SP: <?php echo $dong_chitietsp['TenHH']?></td>
  </tr>
  <tr>
    <td style="color: #FF0000">Giá SP:<?php echo $dong_chitietsp['Gia']. 'VNĐ'?></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Thông số kỹ thuật</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong_chitietsp['MoTaHH']?></td>
  </tr>
  </table>
