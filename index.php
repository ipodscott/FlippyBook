
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>Pulp Novel</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.custom.css" />
		<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script src="js/modernizr.custom.79639.js"></script>
	
	</head>
	<body>
		
		<?php
					$pulp = $_GET['pulp'];
					$files = glob("$pulp/*.{jpg,jpeg,gif,png}", GLOB_BRACE);
					
     					 ?>
		
		
		<div id="container" class="container">	

			<div class="menu-panel">
				<h3>Table of Contents</h3>
				<ul id="menu-toc" class="menu-toc">
					<li class="menu-toc-current"><a href="#front_cover">Front Cover</a></li>
					<?php for ($i=2; $i<count($files); $i++)
				{
					$num = $files[$i];
					echo'<li class=""><a href="#page'.$i.'">Page-'.$i.'</a></li>';
					
					}
				?>
					<li class=""><a href="#back_cover">Back Cover</a></li>
				</ul>
			</div>

			<div class="bb-custom-wrapper">
				<div id="bb-bookblock" class="bb-bookblock">							
				
				
				<?php for ($i=0; $i<count($files); $i++)
				{
					$num = $files[$i];
					echo'<div class="bb-item" id="#page'.$i.'"><div class="content"><div class="scroller">';
					echo'<img class="big-images" src="'.$num.'"/>';
					echo'</div></div></div>';
				}
				?>
								
												
					
						
					
						 													
					<i class="nav-buttons material-icons" id="bb-nav-prev">keyboard_arrow_left</i>
					<i class="nav-buttons material-icons" id="bb-nav-next">keyboard_arrow_right</i>
		
				<span id="tblcontents" class="menu-button">Table of Contents</span>

			</div>
				
		</div><!-- /container -->

		

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		<script src="js/jquery.jscrollpane.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script src="js/page.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mods.css" />
		<script>
			$(function() {

				Page.init();

			});
		
	   

        </script>
			</body>
</html>
