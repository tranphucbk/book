<?php

include('../../config/config.php');
$tensp=$_POST['tensp'];
$masp=$_POST['masp'];
$giasp=$_POST['giasp'];
$soluong=$_POST['soluong'];

$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$hinhanh=time().'_'.$hinhanh;
$tomtat=$_POST['tomtat'];
$noidung=$_POST['noidung'];
$tinhtrang=$_POST['tinhtrang'];
$danhmuc=$_POST['danhmuc'];




if(isset($_POST['themsp'])){

	$sql_them="INSERT INTO tbl_sanpham(tensp,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) VALUES('".$tensp."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
	move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlsp&query=them');
	
}elseif(isset($_POST['suasp'])){
	// $sql_update="UPDATE tbl_danhmuc SET tendanhmuc='".$tendanhmuc."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
		$sql_update="UPDATE tbl_sanpham SET tensp='".$tensp."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
	
	$sql="SELECT * FROM tbl_sanpham WHERE id_sanpham='$GET_[idsanpham]' LIMIT 1";
	$query=mysqli_query($mysqli,$sql);
	while($row=mysqli_fetch_array($query)){
		unlink('upload/'.$row['hinhanh']);
	}
	}else{
		$sql_update="UPDATE tbl_sanpham SET tensp='".$tensp."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
	


}else{
	$id=$_GET['idsanpham'];
	$sql="SELECT * FROM tbl_sanpham WHERE id_sanpham='$id' LIMIT 1";
	$query=mysqli_query($mysqli,$sql);
	while($row=mysqli_fetch_array($query)){
		unlink('upload/'.$row['hinhanh']);

	}




	$sql_xoa="DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";

	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlsp&query=them');


}



?>