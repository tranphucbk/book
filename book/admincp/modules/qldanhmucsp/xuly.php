<?php

include('../../config/config.php');
$tendanhmuc=$_POST['tendanhmuc'];
$thutu=$_POST['thutu'];

if(isset($_POST['themdanhmuc'])){
	$sql_them="INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUES('".$tendanhmuc."','".$thutu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qldanhmucsp&query=them');
}elseif(isset($_POST['suadanhmuc'])){
	$sql_update="UPDATE tbl_danhmuc SET tendanhmuc='".$tendanhmuc."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qldanhmucsp&query=them');


}else{
	$id=$_GET['iddanhmuc'];
	$sql_xoa="DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";

	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qldanhmucsp&query=them');


}



?>