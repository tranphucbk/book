
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport">
	<title>Vnjpbook</title>
	<link rel="stylesheet" type="text/css" href="css/style_admin.css">

</head>

<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
	header('Location:login.php');
}
?>
<body>
	<div class="wrapper">
		<?php
			include("config/config.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");

			


		?>
	</div>	
	
</body>
</html>

