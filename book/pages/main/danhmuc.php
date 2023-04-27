
<?php
	$sql_dm="SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]'ORDER BY id_sanpham DESC";
	$query_dm=mysqli_query($mysqli,$sql_dm);

	$sql_cate="SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate=mysqli_query($mysqli,$sql_cate);

	$row_title=mysqli_fetch_array($query_cate);


?>


<h1>Danh muc san pham:<?php echo $row_title['tendanhmuc']?></h1>



<ul class="list_product">
	<?php 
	while($row_dm=mysqli_fetch_array($query_dm)){
	?>

	<li>
		<a href="">
			<img src="admincp/modules/qlsp/upload/<?php echo $row_dm['hinhanh']?>">
			<p class="title_product">Ten san pham:<?php echo $row_dm['tensp']?></p>
			<p class="price_prodcut">Gia:<?php echo number_format($row_dm['giasp'],0,',','.').'vnd' ?></p>
		</a>
	</li>
	<?php
	}
	?>				
</ul>