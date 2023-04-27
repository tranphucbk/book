
<?php
	 session_start();
?>
<p>Gio hang
<?php

if(isset($_SESSION['dangky'])){
	echo 'Xin chao:'.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
}
?>


</p>

<?php
	
	if(isset($_SESSION['cart'])){

	}
	
?>

<table style="width:100%">
	<tr>
		<th>STT</th>
		<td>ma san pham</td>
		<th>ten san pham</th>
		<th>hinh anh</th>
		<th>so luong</th>
		<th> gia san pham</th>
		<th>Thanh tien </th>
		<th>Quan ly</th>
	</tr>
	<?php
	if(isset($_SESSION['cart'])){
		$i=0;
		$tongtien=0;
		foreach($_SESSION['cart'] as $cart_item){
			$thanhtien=$cart_item['soluong']*$cart_item['giasp'];
			$tongtien+=$thanhtien;
			$i++;

	?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $cart_item['masp'];?></td>
		<td><?php echo $cart_item['tensp'];?></td>
		<td><img src="admincp/modules/qlsp/upload/<?php echo $cart_item['hinhanh'];?>"width="150px"></td>
		<td>

			<a href="pages/main/themgiohang.php?minus=<?php echo $cart_item['id']?>">-</a>
			<?php echo $cart_item['soluong'];?>
			<a href="pages/main/themgiohang.php?plus=<?php echo $cart_item['id']?>">+</a>

		</td>

		<td><?php echo number_format($cart_item['giasp'],0,',','.').'vnd';?></td>
		<td><?php echo number_format($thanhtien,0,',','.').'vnd'?></td>
		<td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xoa</a></td>
	</tr>
	<?php

		}
	?>
	<tr>
		<td colspan="8">
			<p style="float:left;">Tong tien:<?php echo number_format($tongtien,0,',','.').'vnd';?></p>
			<p style="float:right;"><a href="pages/main/themgiohang.php?xoatatca=1">xoa tat ca</a></p>
		</td>
		<div style="clear:both;"></div>
		<?php
			if(isset($_SESSION['dangky'])){
			?>
			<p><a href="#thanhtoan">Dat hang</a></p>

		<?php
			}else{
		?>
		<p><a href="index.php?quanly=dangky">Dang ky</a></p>
		<?php
			}
		?>
	</tr>
	<?php
	}else{
	?>
	<tr>
		<td colspan="8"><p>Gio hang trong</p></td>
	</tr>
	<?php
	} 

	?>
</t




