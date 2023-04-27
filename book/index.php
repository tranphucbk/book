<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport">
	<title>Vnjpbook</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="wrapper">
		<?php
			session_start();
			include("admincp/config/config.php");
			include("pages/header.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");

			


		?>
	</div>	
	
</body>
</html>
