
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
		<link rel="manifest" href="site.webmanifest">
		<meta name="msapplication-TileColor" content="#000000">
		<meta name="theme-color" content="#000000">
		<title>Dieselpunk Industries Newsstand</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.custom.css" />
		<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script src="js/modernizr.custom.79639.js"></script>
		
		
		<style type="text/css">
			.load-overlay{
				display: fixed !important;
				width: 100%;
				height: 100vh;
				background-color: #333;
				z-index: 999999;
				top:0px;
				left: 0px;
			}
			
			.container{
				opacity: 0;
			}
			
			.load-content{
				display: flex;
				position: absolute;
				top:0;
				left: 0;
				width: 100%;
				height: 100%;
				display: flex;
				align-items: center;
				justify-content: center;
			}
			
			.load-content img{
				width: calc(100% - 40px);
				max-width: 1000px;
				opacity: 0;
	
			}
			
		</style>
			
	</head>
	<body>
		
		
		<?php
					$issue = $_GET['issue'];
					$files = glob("$issue/*.{jpg,jpeg,gif,png}", GLOB_BRACE);
					$downloads = glob("$issue/*.{zip,cbz,cbr,rar}", GLOB_BRACE);
     					 ?>
		
		<div class="load-overlay">
			<div class="load-content">
				<img src="newsstand.svg"/>
			</div>
		</div>
		<div id="container" class="container">	

			<div class="menu-panel">
				
				<div class="menu-header">
					<h3>Table of Contents
					
						<?php for ($i=0; $i<count($downloads); $i++)
					{
						$download = $downloads[$i];
						
						echo'<div class="dl-link"><a href="'.$download.'" download><i class="material-icons">cloud_download</i></a></div>';
	
					}
					?>
					</h3>
				</div>
								
				<ul id="menu-toc" class="menu-toc">
					<li class="menu-toc-current" onclick="location.href="#page'.$i.'";">Front Cover</li>
					<?php for ($i=2; $i<count($files); $i++)
				{
					$num = $files[$i];
					echo'<li class="" onclick="location.href="#page'.$i.'";">Page-'.$i.'</li>';
					
					}
				?>
					<li class="" onclick="location.href="#page'.$i.'";">Back Cover</li>
				</ul>
			</div>

			<div class="bb-custom-wrapper">
				<div id="bb-bookblock" class="bb-bookblock">							
				
				
				<?php for ($i=0; $i<count($files); $i++)
				{
					$num = $files[$i];
					echo'<div class="bb-item" id="#page'.$i.'"><div class="content"><img class="big-images" src="'.$num.'"/></div></div>';
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
		<script src="js/mods.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mods.css" />
		
		
		

		
		<script>
			$(function() {

				Page.init();

			});
		
	   

        </script>
			</body>
</html>
