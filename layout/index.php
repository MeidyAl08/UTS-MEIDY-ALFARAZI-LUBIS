<!DOCTYPE html>
<html>
<head>
	<title>UTS Meidy Alfarazi Lubis</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/icon.ico" rel="shortcut icon">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET;?>images/background2.png">
		</div>

		<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=index_post">Post</a>
			<a href="index.php?page=index_login">Login</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020 &copy; Made By Meidy Alfarazi Lubis 
		</div>
	</div>
</body>
</html>