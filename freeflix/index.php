<?php include 'db.php' ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="pagedefault.css" >
	
	<link rel="stylesheet" type="text/css" href="indexdesign.css" >
	<link rel="stylesheet" type="text/css" href="footerdesign.css" >
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
	
	<?php
	$st="select * from Action limit 20;";
	$result=mysqli_query($conn,$st);
	if(mysqli_num_rows($result) > 0)
	{
	echo '<h2>Action</h2>
	<hr>
	<div class="catelog">';
		while($row=mysqli_fetch_assoc($result))
		{
		echo
			'
			
			<a href="player.php?id='.$row['id'].'&cat=Action"><div class="showbox">
				<div class="posters">
			<img src="poster/'.substr($row['name'],-3).$row['releaseyear'].'.jpg" alt="'.substr($row['name'],-3).$row['releaseyear'].'" width="100%" height="100%">
				</div>
				<div class="moviename">
				'.$row['name'].'<br>'.$row['releaseyear'].'
				</div>
			</div>
			</a>
			';
		}
		echo '</div>';
	}
	?>
	
	<?php
	$st="select * from Animation limit 20;";
	$result=mysqli_query($conn,$st);
	if(mysqli_num_rows($result) > 0)
	{
	echo '<h2>Animation</h2>
	<hr>
	<div class="catelog">';
		while($row=mysqli_fetch_assoc($result))
		{
		echo
			'
			
			<a href="player.php?id='.$row['id'].'&cat=Animation"><div class="showbox">
				<div class="posters">
				<img src="poster/'.substr($row['name'],-3).$row['releaseyear'].'.jpg" alt="'.substr($row['name'],-3).$row['releaseyear'].'" width="100%" height="100%">
				</div>
				<div class="moviename">
				'.$row['name'].'<br>'.$row['releaseyear'].'
				</div>
			</div>
			</a>
			';
		}
		echo '</div>';
	}
	?>
	<?php
	$st="select * from Romance limit 20;";
	$result=mysqli_query($conn,$st);
	if(mysqli_num_rows($result) > 0)
	{
	echo '<h2>Romance</h2>
	<hr>
	<div class="catelog">';
		while($row=mysqli_fetch_assoc($result))
		{
		echo
			'
			
			<a href="player.php?id='.$row['id'].'&cat=Romance"><div class="showbox">
				<div class="posters">
			<img src="poster/'.substr($row['name'],-3).$row['releaseyear'].'.jpg" alt="'.substr($row['name'],-3).$row['releaseyear'].'" width="100%" height="100%">
				</div>
				<div class="moviename">
				'.$row['name'].'<br>'.$row['releaseyear'].'
				</div>
			</div>
			</a>
			';
		}
		echo '</div>';
	}
	?>
	<?php
	$st="select * from Fantasy limit 20;";
	$result=mysqli_query($conn,$st);
	if(mysqli_num_rows($result) > 0)
	{
	echo '<h2>Fantasy</h2>
	<hr>
	<div class="catelog">';
		while($row=mysqli_fetch_assoc($result))
		{
		echo
			'
			
			<a href="player.php?id='.$row['id'].'&cat=Fantasy"><div class="showbox">
				<div class="posters">
	<img src="poster/'.substr($row['name'],-3).$row['releaseyear'].'.jpg" alt="'.substr($row['name'],-3).$row['releaseyear'].'" width="100%" height="100%">
				</div>
				<div class="moviename">
				'.$row['name'].'<br>'.$row['releaseyear'].'
				</div>
			</div>
			</a>
			';
		}
		echo '</div>';
	}
	?>
	<?php
	$st="select * from Horror limit 20;";
	$result=mysqli_query($conn,$st);
	if(mysqli_num_rows($result) > 0)
	{
	echo '<h2>Horror</h2>
	<hr>
	<div class="catelog">';
		while($row=mysqli_fetch_assoc($result))
		{
		echo
			'
			
			<a href="player.php?id='.$row['id'].'&cat=Horror"><div class="showbox">
				<div class="posters">
				<img src="poster/'.substr($row['name'],-3).$row['releaseyear'].'.jpg" alt="'.substr($row['name'],-3).$row['releaseyear'].'" width="100%" height="100%">
				</div>
				<div class="moviename">
				'.$row['name'].'<br>'.$row['releaseyear'].'
				</div>
			</div>
			</a>
			';
		}
		echo '</div>';
	}
	?>
	<?php
	$st="select * from Crime limit 20;";
	$result=mysqli_query($conn,$st);
	if(mysqli_num_rows($result) > 0)
	{
	echo '<h2>Crime</h2>
	<hr>
	<div class="catelog">';
		while($row=mysqli_fetch_assoc($result))
		{
		echo
			'
			
			<a href="player.php?id='.$row['id'].'&cat=Crime"><div class="showbox">
				<div class="posters">
				<img src="poster/'.substr($row['name'],-3).$row['releaseyear'].'.jpg" alt="'.substr($row['name'],-3).$row['releaseyear'].'" width="100%" height="100%">
				</div>
				<div class="moviename">
				'.$row['name'].'<br>'.$row['releaseyear'].'
				</div>
			</div>
			</a>
			';
		}
		echo '</div>';
	}
	?>
	
	</div>
	<div id="rightmenu">
	</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>