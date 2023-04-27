<?php
	session_start();
 	$sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
 	$query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);

	}
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang chu</a></li>
				<?php
				while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
				?>
				<li><a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
				<?php
				}
				?>
				
				<li><a href="index.php?quanly=hoconline">Hoc online</a></li>
				<li><a href="index.php?quanly=flashsale">Flash Sale</a></li>
				<li><a href="index.php?quanly=giohang">Gio hang</a></li>
				<?php
				if(isset($_SESSION['dangky'])){
				?>
				<li><a href="index.php?dangxuat=1">Dang xuat</a></li>
				<?php
				}else{
				?>
				<li><a href="index.php?quanly=dangky">Dang nhap</a></li>
				<?php
				}
				?>


			</ul>

			<p>
				<form action="index.php?quanly=timkiem" method="POST">
					<input type="text" placeholder="Tim kiem san pham ..."name="keyword">
					<input type="submit" name="timkiem" value="Tim kiem">
				</form>
			</p>
</div>
