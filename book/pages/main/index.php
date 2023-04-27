<?php
	$sql_dm="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
	$query_dm=mysqli_query($mysqli,$sql_dm);
?>

<h3>Sach moi</h3>




<ul class="list_product">
	<?php
	while($row=mysqli_fetch_array($query_dm)){
	?>
	<li>
		<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
			<img src="admincp/modules/qlsp/upload/<?php echo $row['hinhanh']?>">
			<p class="title_product">Ten san pham:<?php echo $row['tensp']?></p>
			<p class="price_prodcut">Gia: <?php echo $row['giasp'] ?></p>
			<p style="text-align: center; color:#d1d1d1"><?php echo$row['tendanhmuc']?></p>
		</a>
	</li>
	<?php
	}
	?>

					
</ul>