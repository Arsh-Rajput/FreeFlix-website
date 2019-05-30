<?php
	include 'db.php';
	$st="select * from students";
	$rest=mysqli_query($conn,$st);
	$result=array();
	while($res=mysqli_fetch_assoc($rest))
	{
		if(!is_null($res))
			$result[]=$res;
	}
	echo json_encode($result);
	
?>