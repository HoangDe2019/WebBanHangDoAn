<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm chi tiết sp</div></td>
  </tr>
  <tr>
    <td>Tên sp</td>
    <td><input type="text" name="tenhh"></td>
  </tr>
  <tr>
    <td>Giá sp</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinh"></td>
  </tr>
  <tr>
    <td>Mô tả sp</td>
    <td><textarea name="motahh" cols="40" rows="15"></textarea></td>
  </tr>
    <?php
        $sql="select * from nhomhanghoa";
        $run=mysqli_query($connect, $sql);
    ?>
  <tr>
    <td>Loại sp</td>
    <td><select name="MaNhom">
     <?php
     while($dong=mysqli_fetch_array($run)) {
         ?>
         <option value="<?php echo $dong['MaNhom'] ?>"><?php echo $dong['TenNhom'] ?></option>
         <?php
     }
            ?>
    </select></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
    <td colspan="2">
    <div align="center">
        <button name="them" value="Thêm">Thêm</button>
    </div>
    </td>
  </tr>
</table>
</form>