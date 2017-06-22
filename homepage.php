
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="homepage.css" />
		<link rel="stylesheet" type="text/css" href="grid.css" />
		<link rel="stylesheet" type="text/css" href="normalize.css" />
		<script type="text/javascript" src="slide.js"></script>
	</head>
	<body onLoad="slideA()">
		<?php include_once("header.php"); ?>

		<main>
			<div class="images">
				<img id="img" src="jsImgSlider/imagesEdit/image-slider-1.jpg" />
				<div id="left_holder"><img onClick="slide(-1)" class="left" src="images/arrow_left.png" /></div>
				<div id="right_holder"><img onClick="slide(1)" class="right" src="images/arrow_right.png" /></div>
			</div>
			<p>The latest projects by our artists and photographers</p>
			<div class="contain">
			
				<div class="row">
				<div class="row1">
					<div class="six osi">
					</div>
					
					<div class="three arin">
					</div>
					
					<div class="three otun">
					</div>
				</div>
				</div>
				
				<div class="row">
				<div class="row2">
					<div class="three osi">
					</div>
					
					<div class="six arin">
					</div>
					
					<div class="three otun">
					</div>
				</div>
				</div>
				
				
				<div class="row">
				<div class="row4">
					<div class="three okan">
					</div>
					
					<div class="three eji">
					</div>
					
					<div class="three eta">
					</div>
					
					<div class="three erin">
					</div>
				</div>
				</div>
				
				<div class="row">
				<div class="row5">
					<div class="six osi">
					</div>
					
					<div class="three arin">
					</div>
					
					<div class="three otun">
					</div>
				</div>
				</div>
			
			
			</div>
			<div class="row">
			<div class="row7">
				<div class="six">
					<a href="photogallery.php">Click this link to view all works by our photographers.</a>
				</div>
				
				<div class="six">
					<a href="artgallery.php">Click this link to view all works by our artists.</a>
				</div>
			</div>
			</div>
			
			<div class="row">
			<div>
				<?php include_once("footer.php"); ?>
			</div>
			</div>
			
		</main>

		
	</body>
</html>
