<div class="clear"></div>
<div id="main">				
				<?php
					

					if(isset($_GET["action"]) && isset($_GET["query"])){
						$tam=$_GET["action"];
						$query=$_GET["query"];

					}else{
						$tam='';
						$query='';
					}

					
					if($tam=='qldanhmucsp'&& $query=='them'){
						
						include("qldanhmucsp/them.php");
						include("qldanhmucsp/lietke.php");
						
					}elseif($tam=='qldanhmucsp'&& $query=='sua'){
						include ("qldanhmucsp/sua.php");

					}elseif($tam=='qlsp'&& $query=='them'){
						
						include("qlsp/them.php");
						include("qlsp/lietke.php");					
						
					}elseif($tam=='qlsp'&& $query=='sua'){
						include("qlsp/sua.php");
						
					}else{
						include("dashboard.php");
					}
				?>

</div>