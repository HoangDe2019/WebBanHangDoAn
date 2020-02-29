<?php
    $sql="select * from hanghoa where MSHH='$_GET[id]'";
    $run=mysqli_query($connect, $sql);
    $dong=mysqli_fetch_array($run);
    //printf("%s\n",$run);
?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['MSHH'] ?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Sửa chi tiết sp</div></td>
        </tr>
        <tr>
            <td>Tên sp</td>
            <td><input type="text" name="tenhh" value="<?php echo $dong['TenHH']?>"></td>
        </tr>
        <tr>
            <td>Giá sp</td>
            <td><input type="text" name="gia" value="<?php echo $dong['Gia']?>"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinh"><img src="modules/quanlychitietsp/uploads/<?php echo $dong['Hinh']?>" width="60" height="60"> </td>
        </tr>
        <tr>
            <td>Mô tả sp</td>
            <td><textarea name="motahh" cols="40" rows="15"><?php echo $dong['MoTaHH']?></textarea></td>
        </tr>
        <?php
        $sql_hanghoa="select * from nhomhanghoa";
        $run_hanghoa=mysqli_query($connect, $sql_hanghoa);
        ?>
        <tr>
            <td>Loại sp</td>
            <td><select name="MaNhom">
                    <?php
                    while($dong_hanghoa=mysqli_fetch_array($run_hanghoa)) {
                    if($dong['MSHH'] == $dong_hanghoa['MSHH']){
                    ?>
                    <option selected="selected"
                            value="<?php echo $dong_hanghoa['MaNhom'] ?>"><?php echo $dong_hanghoa['TenNhom'] ?></option>
                    <?php
                    }else{
                        ?>
                       <option value="<?php echo $dong_hanghoa['MaNhom'] ?>"><?php echo $dong_hanghoa['TenNhom'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" value="<?php echo $dong['SoLuongHang']?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <div align="center">
                    <button name="sua" value="sua">Sữa</button>
                </div>
            </td>
        </tr>
    </table>
</form>