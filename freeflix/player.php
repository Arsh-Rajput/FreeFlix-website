<?php include 'db.php' ?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="pagedefault.css" >
	<link rel="stylesheet" type="text/css" href="playerdesign.css" >
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
		$st="select * from ".$_GET['cat']." where id='".$_GET['id']."';";
		$res=mysqli_query($conn,$st);
		$row=mysqli_fetch_assoc($res);
	?>
	<h2><?php echo $row['name']?></h2>
	<hr>
	<div id="videobody">
	          <video height="480px" width="720px" controls>
			<source src="<?php echo $row['link'];?>" type="video/mp4">
		  </video>
	</div>
	<div id="moviedata">
	<?php
	echo ''.$row['name'].'<br>
	Release year:'.$row['releaseyear'].'<br>
	Description: <p>'.$row['description'].'</p>
	Cast:'.$row['cast'].'<br><br><br>
	<a style="height:50px;width=110px;background-color:green;color:white;border:2px solid black;border-readius:5px;" href="'.$row['link'].'" target="blank">Download</a>';
	?>
	</div>
	<div id ="related">
		<?php
	$st="select * from ".$_GET['cat']." limit 20;";
	$result=mysqli_query($conn,$st);
	if(mysqli_num_rows($result) > 0)
	{
	echo '<h2>Related</h2>
	<hr>
	<div class="catelog">';
		while($row=mysqli_fetch_assoc($result))
		{
		echo
			'
			
			<a href="player.php?id='.$row['id'].'&cat='.$_GET['cat'].'"><div class="showbox">
				<div class="posters">
				<img src="poster/'.substr($row['name'],-3).$row['releaseyear'].'.jpg" alt="'.substr($row['image'],-3).$row['releaseyear'].'" width="100%" height="100%">
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
	</div>
	<div id="rightmenu">
	</div>
	<?php include 'pagination.php'; ?>
	</div>
	<?php include 'footer.php';?>

</body>
</html>