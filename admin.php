<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
	session_start();
    $con = mysqli_connect("localhost", "root", "", "announcementboard");
   		if(! $con ) {
      		die('Could not connect: ' . mysql_error());
  		}
   
    $query = 'SELECT * FROM post ORDER BY ID';
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body {
			margin: 100px 100px;
			font-family: Arial;
			font-size: 20px;
			background-color: #1a1a1d;
			color: #ffccff;
			text-align: center;
		}
	</style>
</head>
<body>
<h1 style="color: #ff99cc; text-align: center; font-size: 40px";>X Titan E-Comm Announcement Board</h1>
        <?php
        if($username == "admin"&& $password == "admin1234"){
            $_SESSION['login'] = 1;
			header("Location:index.php");
        }
        else{
            $_SESSION['login'] = 0;
            echo "Incorrect username";
      	    header( "Refresh:3; url=login.php", true, 303);
        }
        ?>
</body>
</html>