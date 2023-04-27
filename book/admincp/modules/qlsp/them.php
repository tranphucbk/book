<p> Them san pham </p>

<table border="1" width="100%" >
	<form method="POST" action="modules/qlsp/xuly.php" enctype="multipart/form-data">
		<tr>
			<td>Ten san pham</td>
			<td><input type="text" name="tensp"></td>
		</tr>
		<tr>
			<td>Ma sp</td>
			<td><input type="text" name="masp"></td>
		</tr>
		<tr>
			<td>Gia sp</td>
			<td><input type="text" name="giasp"></td>
		</tr>
		<tr>
			<td>So luong</td>
			<td><input type="text" name="soluong"></td>
		</tr>
		<tr>
			<td>Hinh anh</td>
			<td><input type="file" name="hinhanh"></td>
		</tr>
		<tr>
			<td>Tom tat</td>
			<td><textarea rows="5" name="tomtat"></textarea></td>
		</tr>
		<tr>
			<td>Noi dung</td>
			<td><textarea rows="5" name="noidung"></textarea></td>

		</tr>

		<tr>
			<td>Tinh trang </td>
			<td>
				<select name="tinhtrang">
					<option value="1">New</option>
					<option value="2">Used</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Danh muc san pham</td>
			<td>
				<select name="danhmuc">
					<?php 
					$sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
					$query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
					while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
					?>
					<option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
					<?php
					}
					?>
				</select>
			</td>

		</tr>





		<tr>
			<td colspan="2"><input type="submit" name="themsp" value="Them san pham"></td>
		</tr>
	</form>
</table>