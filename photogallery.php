<html>
	<head>
		<script src="jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="fancyapps-fancyBox-18d1712/source/jquery.fancybox.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="fancyapps-fancyBox-18d1712/source/jquery.fancybox.css" />
		<link rel="stylesheet" type="text/css" href="im.css" />
		<link rel="stylesheet" type="text/css" href="homepage.css" />
		<link rel="stylesheet" type="text/css" href="normalize.css" />
	</head>
	<body>

		<?php include_once("header.php"); ?>
		<?php
			include('db.php');
			$result = mysqli_query($con, "SELECT * FROM image");
			while($row = mysqli_fetch_array($result)){
				echo "<a href='".$row['p_img']."' class='fancybox-effects-d' rel='group' title='".$row['p_title']."'>"."<img src=".$row['p_img']." &nbsp; class='im'>";
			}
		?>

		<script>
			$(document).ready(function() {
				$(".fancybox-effects-d").fancybox({
					padding: 0,
					openEffect: 'elastic',
					openSpeed: 300,
					closeEffect: 'elastic',
					closeSpeed: 250,
					closeClick: true,
					helpers : {
					overlay : null
				}
				});
			});
		</script>
		<?php include_once("footer.php"); ?>
	</body>
</html>