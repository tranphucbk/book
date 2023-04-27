<div id="main">
			<?php
				include("sidebar/sidebar.php");
			?>
			<div class="maincontent">
				<?php
					$tam=$_GET["quanly"];
					if(isset($_GET["quanly"])){
						$tam=$_GET["quanly"];
					}else{
						$tam='';
					}

					
					if($tam=='danhmuc'){
						include("main/danhmuc.php");
					}elseif($tam=='hoconline'){
						include ("main/hoconline.php");

					}elseif($tam=='flashsale'){
						include("main/flashsale.php");
					}elseif($tam=='sanpham'){
						include ("main/sanpham.php");
					}elseif($tam=='giohang'){
						include ("main/giohang.php");
					}elseif($tam=='thanhtoan'){
						include ("main/thanhtoan.php");
					}elseif($tam=='dangky'){
						include ("main/dangky.php");
					}elseif($tam=='dangnhap'){
						include ("main/dangnhap.php");
					}elseif($tam=='timkiem'){
						include ("main/timkiem.php");
					}else{
						include("main/index.php");
					}



				?>
			</div>

</div>