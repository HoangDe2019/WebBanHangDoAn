<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/css.css"/>
<title>Quản trị nội dung website</title>
</head>

<body>
    <?php
        session_start();
        if(!isset($_SESSION['dangnhap'])){
           header('location:admincp/index.php');
        }
    ?>
	<div class="wrapper">
    	<?php
			include('modules/config.php');
			include('modules/header.php');
			include('modules/menu.php');
			include('modules/content.php');
			include('modules/footer.php');

		?>
  
    </div>
    
</body>
</html>
