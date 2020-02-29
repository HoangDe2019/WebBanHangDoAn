<div class="content">
         <?php
		 	if(isset($_GET['quanly'])){
				$temp=$_GET['quanly'];}
			else{
				$temp='';
				}
			if($temp=='quanlyloaisp'){
				include('modules/quanlyloaisp/main.php');
			}
			if($temp=='quanlychitietsp'){
                include('modules/quanlychitietsp/main.php');
            }
		 ?>
        <div class="clear"></div>