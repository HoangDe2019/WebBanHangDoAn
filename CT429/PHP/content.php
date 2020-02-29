
<div class="content">

    <div class="left">
        <?php
            include ('PHP/menuLeft/danhsach.php');
        ?>
    </div>

    <div class="right">
        <?php
        if(isset($_GET['xem'])){

            $temp=$_GET['xem'];
        }
        else{
            $temp='';
        }
        if($temp=='chitietloaisanpham'){
            include ('PHP/menuRight/chitietloaisanpham.php');
        }
        elseif($temp=='chitietsanpham'){
            include ('PHP/menuRight/chitietsanpham.php');
        }else {
            include('PHP/menuRight/tatcasanpham.php');
        }
        ?>
    </div>

</div>
<div class="clear"></div>