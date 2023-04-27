<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
	unset($_SESSION['dangnhap']);
	header('Location:login.php');
}
?>

<p><a href="index.php?dangxuat=1">Dang xuat <?php if(isset($_SESSION['dangnhap'])){ 
	echo "1";echo $_SESSION['dangnhap'];
}else{
	echo "0";
}?></a></p>