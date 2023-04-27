<?php
	session_start();
	if(isset($_POST['dangky'])){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=md5($_POST['password']);
		$address=$_POST['address'];
		$sql="INSERT INTO tbl_khachhang(username,email,address,password,phone) VALUE('".$username."','".$email."','".$address."','".$password."','".$phone."')";

		$sql_dangky=mysqli_query($mysqli,$sql);
		if($sql_dangky){
			echo '<p style="color:green">Ban da dang ky thanh cong </p>';
			$_SESSION['dangky']=$username;
			$_SESSION['id_khachhang']=mysql_insert_id($mysqli);
			header('Location:index.php?quanly=giohang');

		}
	}

?>
<p>Dang ky</p>
<style type="text/css">
	table.dangky tr td{
		padding: 5px;
	}
</style>

<form action="" method="POST">
<table class="dangky" border="1" width="50%" >
	<tr>
		<td>Ho ten</td>
		<td><input type="text" size="50" name="username"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" size='50' name="email"></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="text" size="50" name="phone"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" size="50" name="address"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" size="50" name="password"></td>
	</tr>

	<tr>
		<td><input type="submit" name="dangky" value="Dangky"></td>
		<td><a href="index.php?quanly=dangnhap">Dang nhap neu ban da co tai khoan</a></td>
	</tr>
	
</table>
</form>