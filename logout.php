<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="logout">
	<?php 
		session_start();
      	$_SESSION['login'] = 0;
      	header( "Refresh:1; url=index.php", true, 303);
      	echo 'Logging out'
	?>
	</div>

</body>
</html>