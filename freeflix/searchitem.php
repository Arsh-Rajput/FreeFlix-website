<?php include 'db.php' ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="pagedefault.css" >
	<link rel="stylesheet" type="text/css" href="footerdesign.css" >
	<link rel="stylesheet" type="text/css" href="searchdesign.css" >
	<link rel="stylesheet" type="text/css" href="categorydesign.css" >
	<title>My web page</title>
</head>
<body>
	<script>
		function myFunction() {
		var x = document.getElementById("navbar");
		if (x.className === "topnav") {
		x.className += " responsive";
		} else {
		x.className = "topnav";
		}
	}
	</script>
	<?php include 'headbar.php';?>
	<?php include 'navbar.php';?>
	<div id="containermain">
	<div id="leftmenu"></div>
	
	<div id="content">
	
	<h2>Your Search Result</h2>
	<hr>
	<div id="box">
	<?php
	$st="select * from Action where keywords like '%".$_GET['keys']."%' UNION 
select * from Romance where keywords like '%".$_GET['keys']."%' UNION 
select * from Horror where keywords like '%".$_GET['keys']."%' UNION 
select * from Fantasy where keywords like '%".$_GET['keys']."%' UNION 
select * from Animation where keywords like '%".$_GET['keys']."%' UNION 
select * from Crime where keywords like '%".$_GET['keys']."%';";
	$result=mysqli_query($conn,$st);
	while($row=mysqli_fetch_assoc($result))
	{
	echo '
		<a href="player.php?id='.$row['id'].'"><div class="showbox">
			<div class="posters">
			<img src="poster/'.$row['image'].'" width="100%" height="100%">
			</div>
			<div class="moviename">
			'.$row['name'].'<br>'.$row['releaseyear'].'
			</div>
		</div>
		</a>
		';
	}
	?>
	</div>
	</div>
	<div id="rightmenu">
	</div>
	</div>
	<?php include 'footer.php';?>

</body>
</html>