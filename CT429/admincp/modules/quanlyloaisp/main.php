<div class="left">
	<?php 
		if(isset($_GET['ac'])){
			$temp=$_GET['ac'];
		}
		else{
			$temp='';
		}
		if($temp=='them'){
			include('modules/quanlyloaisp/them.php');	
		}
		if($temp=='sua'){
			include('modules/quanlyloaisp/sua.php');	
		}
	?>
</div>
<div class="right">
	<?php
		include('modules/quanlyloaisp/lietke.php');
	?>
</div>