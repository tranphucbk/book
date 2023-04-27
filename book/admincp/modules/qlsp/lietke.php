<?php
	$sql_lietke_sp="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
	
?>


<p>Liet ke san pham</p>
<table style="width: 100%" border="1" >
	<tr>
		<th>id</th>
		<th>Ten san pham</th>
		<th>Ma san pham</th>
		<th>Hinh anh</th>
		<th>Gia san pham</th>
		<th>So luong</th>
		<th>Tom tat</th>
		<th>Tinh trang</th>
		<th>Ten danh muc</th>

	</tr>
	<?php
	$i=0;
	while($row=mysqli_fetch_array($query_lietke_sp)){
		$i++;

	?>

	<tr>
		<td><?php echo $i?></td>
		<td><?php echo $row['tensp']?></td>
		<td><?php echo $row['masp']?></td>
		<td><img src="modules/qlsp/upload/<?php echo $row['hinhanh']?>" width="150px" ></td>
		<td><?php echo $row['giasp']?></td>
		<td><?php echo $row['soluong']?></td>
		<td><?php echo $row['tomtat']?></td>
		<td><?php echo $row['tinhtrang']?></td>
		<td>
			<a href="modules/qlsp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xoa</a>|<a href="?action=qlsp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sua</a>
		</td>
		<td><?php echo $row['tendanhmuc']?></td>

	</tr>
	<?php
	}

	?>

</table>