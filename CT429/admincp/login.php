<?php
include ('modules/config.php');
session_start();
//session_destroy();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from admin where username='$username' and password='$password' limit 1";
    $query=mysqli_query($connect, $query);
    $nums=mysqli_num_rows($query);
    if($nums>0 ){
        $_SESSION['dangnhap']=$username;
        header('location:../../index.php');
    }else{
        header('location:../../login.php');
    }
}
?>
<form action="" method="post">
    <center><table width="200" border="1">
            <tr>
                <td colspan="2"><div align="center">Đăng nhập</div></td>
            </tr>
            <tr>
                <td>Tài khoản:</td>
                <td><input type="text" name="username" size="20"></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="password" size="20"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <input type="submit" name="login" id="button" value="Login">
                    </div>
            </tr>
        </table></center>
</form>