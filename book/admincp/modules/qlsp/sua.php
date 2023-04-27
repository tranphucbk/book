<p> Sua san pham </p>
<?php
	$sql_sua_sp="SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
	echo $_GET['idsanpham'];
?>
<p> Sua san pham </p>



<table border="1" width="100%" >
	<?php
	while($row=mysqli_fetch_array($query_sua_sp)){
	?>



	<form method="POST" action="modules/qlsp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype="multipart/form-data">
		<tr>
			<td>Ten san pham</td>
			<td><input type="text" value="<?php echo $row['tensp']?>" name="tensp"></td>
		</tr>
		<tr>
			<td>Ma sp</td>
			<td><input type="text"  value="<?php echo $row['masp']?>" name="masp"></td>
		</tr>
		<tr>
			<td>Gia sp</td>
			<td><input type="text" value="<?php echo $row['giasp']?>" name="giasp"></td>
		</tr>
		<tr>
			<td>So luong</td>
			<td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
		</tr>
		<tr>
			<td>Hinh anh</td>
			<td><input type="file" name="hinhanh">
				<img src="modules/qlsp/upload/<?php echo $row['hinhanh']?>" width="150px">

			</td>

		</tr>
		<tr>
			<td>Tom tat</td>
			<td><textarea rows="5" name="tomtat"><?php echo $row['tomtat']?> </textarea></td>
		</tr>
		<tr>
			<td>Noi dung</td>
			<td><textarea rows="5" name="noidung"><?php echo $row['noidung']?></textarea></td>

		</tr>

		<tr>
			<td>Tinh trang </td>
			<td>
				<select name="tinhtrang">
					<?php if($row['tinhtrang']==1){ ?>
					<option value="1" selected >New</option>
					<option value="2">Used</option>

					<?php }else{ ?>
					<option value="1">New</option>
					<option value="2" selected>Used</option>
					<?php
						}
					?>
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
						if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
					?>
					<option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
					<?php
					}else{
					?>
					<option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
					<?php
						}

					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="suasp" value="Sua san pham"></td>
		</tr>
	</form>
	<?php
	}
	?>

</table>