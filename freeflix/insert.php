<?php include 'db.php'?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="insertdesign.css">
<title>Add movie</title></head>
<body>
	<div id="content">
	<form action="insertdata.php" method="GET">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" class="size4" name="name" placeholder="enter movie name"/></td>
			</tr>			<tr>
				<td>Category:</td>
				<td>
				<select class="size4" name="cat">
				  <option value="Action">Action</option>
				  <option value="Animation">Animation</option>
				  <option value="Fantasy">Fantasy</option>
				  <option value="Crime">Crime</option>
				  <option value="Horror">Horror</option>
				  <option value="Romance">Romance</option>
				</select>
				
				
				</td>
			</tr>
			<tr>
				<td>Link:</td>
				<td><input type="text" class="size8" name="link" placeholder="enter link"/></td>
			</tr><tr>
				<td>Release year:</td>
				<td><input type="number" class="size2" name="releaseyear" placeholder="enter release year"/></td>
			</tr><tr>
				<td>Description:</td>
				<td><input type="text" class="size8" name="desc" placeholder="enter Description"/></td>
			</tr>
			<tr>
				<td>Image Link:</td>
				<td><input type="text" class="size8" name="image" placeholder="enter image link"/></td>
			</tr><tr>
				<td>Keywords:</td>
				<td><input type="text" class="size8" name="keys" placeholder="enter Keywords"/></td>
			</tr><tr>
				<td>Cast:</td>
				<td><input type="text" class="size8" name="cast" placeholder="enter Cast"/></td>
			</tr><tr>
				<td>Producer:</td>
				<td><input type="text" class="size4" name="producer" placeholder="enter Producer"/></td>
			</tr><tr>
				<td>Director:</td>
				<td><input type="text" class="size4" name="director" placeholder="enter director name"/></td>
			</tr>
			<tr>
				<td colspan="2" align="text-center">
				<div id="buttonspace">
		<button type="Submit" class= "button">Insert</Button>
		</div>

				</td>
			</tr>
		</table>
			</form>
	</div>
	
</body>
</html>
