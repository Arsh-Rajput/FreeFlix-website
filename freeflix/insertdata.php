<?php include 'db.php'?>
<html>
<head>
<title>
</title>
</head>
<body>
	<?php
		try
		{
		$st="insert into ".$_GET['cat']." values ('','".$_GET['name']."','".$_GET['link']."','".$_GET['releaseyear']."','".$_GET['desc']."','".$_GET['producer']."','0','".$_GET['cast']."','".$_GET['keys']."','".$_GET['director']."','".$_GET['image']."');";
		$res=mysqli_query($conn,$st);
		echo '<h1 style="text align:center;font-size:30px;font-color:green;font-family:arial;">Success</h1>';
		}
		catch(Exception $e)
		{

			echo $e->getMessage();
		}
		
	?>	
<form action="insert.php">
<Button type="Submit" value="back">Back</button>
</form>
</body>
</html>