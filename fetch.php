<!DOCTYPE html>
<html>
	
<head>
	<title></title>
</head>
<body>
	<?php 
		$con = mysqli_connect ("local host", "root", "", "announcementboard");
   
   		if(! $con ) {
      		die('Could not connect: ' . mysql_error());
  		}
   		$query = 'SELECT * FROM post';
   		$result = mysqli_query($con, $query);
   
   		if(!$result ) {
      		die('Could not get data: ' . mysql_error());
   		}
   
   		while($row = mysqli_fetch_assoc($result)) {
      		echo "ID :{$row['id']}  <br> ".
         		"Title : {$row['title']} <br> ".
         		"Content : {$row['content']} <br> ".
         		"--------------------------------<br>";
   		}
   
   		echo "Fetched data successfully\n";
	?>
</body>
</html>