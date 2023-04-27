<p>Chi tiet san pham</p>

<?php
	$sql_chitiet="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet=mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet=mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
<div class="hinhanh_sanpham">
	<img width="30%" src="admincp/modules/qlsp/upload/<?php echo $row_chitiet['hinhanh']?>">
</div>
<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
<div class="chitiet_sanpham">
	<h3> Ten san pham:<?php echo $row_chitiet['tensp']?></h3>
	<p>Ma san pham:<?php echo $row_chitiet['masp']?></p>
	<p>Gia san pham:<?php number_format($row_chitiet['giasp'],0,',','.').'vnd'?></p>
	<p>So luong san pham:<?php echo $row_chitiet['soluong']?></p>
	<p>Danh muc san pham:<?php echo $row_chitiet['tendanhmuc']?>></p>
	<p><input class="themgiohang" name="themgiohang" type="submit" value="them gio hang"></p>
</div>
</form>
</div>
<?php
	}
?>