<?php
	/*$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='quanlybanhang';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết được!');
	mysql_select_db($conn,$csdl);
	*/
	
	/*define("tenmaychu","localhost");
	define("tentaikhoan","root");
	define("pass","");
	define("csdl","quanlybanhang");
	define("DB_CHARSET","utf8");


	function connect(){
    $conn=mysql_connect("tenmaychu","tentaikhoan","pass") or die("Error:".mysql_error().":".mysql_error());
    mysql_select_db(csdl);
    return $conn;}*/
	$username = "root"; // Khai báo username
	$password = "";      // Khai báo password
	$server   = "localhost";   // Khai báo server
	$dbname   = "quanlybanhang";      // Khai báo database

// Kết nối database tintuc
	$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
	if ($connect->connect_error) {
          die("Không kết nối :" . $connect->connect_error);
          exit();
	}
?>