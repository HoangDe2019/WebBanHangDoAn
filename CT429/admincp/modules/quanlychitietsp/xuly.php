<?php
include('../config.php');
$id=$_GET['id'];
$tensp = $_POST['tenhh'];
$mota = $_POST['motahh'];
$gia = $_POST['gia'];
$loaisp = $_POST['MaNhom'];
$soluong=$_POST['soluong'];
$hinhanh = $_FILES['hinh']['name'];
$hinhanh_tmp=$_FILES['hinh']['tmp_name'];
move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
if(isset($_post['them'])){
    //them
    $sql = "INSERT INTO hanghoa(TenHH, Gia, Hinh, MoTaHH, MaNhom, SoLuongHang) VALUES ('$tennhom','$gia','$hinhanh','$mota','$loaisp','$soluong')";
    $run=mysqli_query($connect, $sql);
    //mysqli_query($sql);
    header('location:../../index.php?quanly=quanlychitietsp&ac=them');
}else if(isset($_POST['sua'])){
    //sua
    if ($hinhanh!='') {
        $sql = "Update hanghoa set TenHH='$tensp', Gia='$gia', Hinh='$hinhanh', MoTaHH='$mota', MaNhom='$loaisp', SoLuongHang='$soluong' where MaNhom='$id'";
    }else{
        $sql = "Update hanghoa set TenHH='$tensp', Gia='$gia', MotaHH='$mota', MaNhom='$loaisp', SoLuongHang='$soluong' where MaNhom='$id'";
    }
    $run=mysqli_query($connect,$sql);
    header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
}else{
    //xoa
    $sql = "delete from hanghoa where MSHH = '$id' ";
    $run=mysqli_query($connect,$sql);
    header('location:../../index.php?quanly=quanlychitietsp&ac=them');
}



/*$manhom = "";
$tenmanhom = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST["them"])) { $manhom = $_POST['manhom']; }
if(isset($_POST["date"])) { $tenmanhom = $_POST['tenmanhom']; }

//Code xử lý, insert dữ liệu vào table
if(isset($_post['them'])){
$sql = "INSERT INTO `nhomhanghoa` (`MaNhom`, `TenNhom`) VALUES ('$manhom', '$tenmanhom');";
header('location:../../index.php?quanly=quanlyloaisp&ac=them');

}}*/
?>