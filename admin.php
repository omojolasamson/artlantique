


<html>
	<head>
		<script src="jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="fancyapps-fancyBox-18d1712/source/jquery.fancybox.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="fancyapps-fancyBox-18d1712/source/jquery.fancybox.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<header>
			<div class="container">
				<h3><a href="index.php">ARTMARIS</h3>
				<nav>
					<a href="#">Sign up</a>
					<a href="#">Log in</a>
					<a href="photogallery.php">Photo Gallery</a>
					<a href="artgallery.php">Art Gallery</a>
			</div>
				</nav>
		</header>
		<form action="admin.php" method="post" enctype="multipart/form-data">
			Choose File:<input type="file" name="file">
			Title: <input type="text" name="nam" >
			<input type="submit" name="submit" value="submit" >
		</form>

		<?php
	include('db.php');
	if(isset($_POST['submit'])){
		$name = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'uploads/';
		$target = 'uploads/'.$name;

		if(move_uploaded_file($tmp_name, $location.$name)){
			echo "file uploaded";
			$nam = $_POST['nam'];
			$query = mysqli_query($con, "INSERT INTO image(p_img,p_title)VALUES('".$target."','$nam')");
		}
		else{
			echo "file not uploaded";
		}
	}
?>
		
	</body>
</html>