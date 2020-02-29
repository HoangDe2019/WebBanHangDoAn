<?php
	include('../config.php');
	$id=$_GET['id'];
	$tennhom = $_POST['TenNhom'];
	$thutu = $_POST['ThuTu'];
	if(isset($_post['them'])){
		//them
		$sql = "INSERT INTO nhomhanghoa(TenNhom, ThuTu) VALUES ('$tennhom','$thutu')";
		$run=mysqli_query($connect, $sql);
		//mysqli_query($sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}else if(isset($_POST['sua'])){
		//sua
		$sql="Update NhomHangHoa set TenNhom='$tennhom', ThuTu='$thutu' where MaNhom='$id'";
		$run=mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
	}else{
		//xoa
		$sql = "delete from nhomhanghoa where MaNhom = '$id' ";
		$run=mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
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