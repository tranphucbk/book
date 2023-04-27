<?php
	if(isset($_POST['timkiem'])){
		$keyword=$_POST['keyword'];

	}
	$sql="SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensp LIKE '%".$keyword."%'";
	$query_sql=mysqli_query($mysqli,$sql);



?>

<h3>Tu khoa tim kiem:<?php echo $_POST['keyword'];?></h3>


<ul class="list_product">
	<?php
	while($row=mysqli_fetch_array($query_sql)){
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