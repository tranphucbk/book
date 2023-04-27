<?php
	session_start();
	include('config/config.php');

	if(isset($_POST['dangnhap'])){
		
		$taikhoan=$_POST['username'];
		$matkhau=md5($_POST['password']);
		$sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row=mysqli_query($mysqli,$sql);

		$count=mysqli_num_rows($row);
		
		if($count>0){
			$_SESSION['dangnhap']=$taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("mat khau hoac tai khoang khong dung");</script>';

			header("Location:login.php");
		}
	}


?>

<!DOCTYPE html>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport">
	<title>Dang nhap Admin</title>
	<style type="text/css">
		body{
			background: #f2f2f2;
		}
		.wrapper_login{
			width:40%;
			margin:0 auto;
		}
	</style>

</head>

<body>
<div class="wrapper_login">
	<form action="" autocomplete="off" method="POST">
	<table border="1" style="text-align: center;">
		<tr>
			<td colspan="2"><h2>Dang nhap Admin</h2></td>
		</tr>
		<tr>
			<td>Tai khoan</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Mat khau</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="dangnhap" value="dang nhap "></td>
		</td>
	</table>
</form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>