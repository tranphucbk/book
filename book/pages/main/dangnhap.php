<?php
	

	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$sql="SELECT * FROM tbl_khachhang WHERE email='".$email."' AND password='".$password."' LIMIT 1";
		$query_sql=mysqli_query($mysqli,$sql);

		$count=mysqli_num_rows($query_sql);
		
		if($count>0){
			$row=mysqli_fetch_array($query_sql);
			$_SESSION['dangky']=$row['username'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<script>alert("mat khau hoac tai khoang khong dung");</script>';

			
		}
	}


?>
<form action="" autocomplete="off" method="POST">
	<table border="1" style="text-align: center;">
		<tr>
			<td colspan="2"><h2>Dang nhap </h2></td>
		</tr>
		<tr>
			<td>Tai khoan</td>
			<td><input type="text" name="email"></td>
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