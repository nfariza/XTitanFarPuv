<?php 
		//NUR FARIZA BINTI BAHARUDDIN 110048699
	    //PUVEEMALAR A/P PARAMESWARAN 110050059
   		session_start();
        $con = mysqli_connect("localhost", "root", "", "announcementboard");

		$login = '';

		if(isset($_SESSION['login'])) {
			$_SESSION['login'];
			if($_SESSION['login'] == '') {
				$login = 0;
			} else {
				$login = $_SESSION['login'];
			}
		}

   		if(! $con ) {
      		die('Could not connect: ' . mysql_error());
  		}
   
   		$query = 'SELECT * FROM post ORDER BY ID DESC LIMIT 3';
   		$result = mysqli_query($con, $query);
	?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>X Titan E-Comm</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="color: #ff99cc; text-align: center; font-size: 40px";>X Titan E-Comm Announcement Board</h1>
    <div id="admin">
		<?php
			if(isset($login)) {
				if ($login == 0 || $login == '') {
					echo '<button style="display: none; "><a href="newpost.php">New post</a></button>
						<button><a href="login.php">Admin Login</a></button>';
				} elseif ($login == 1) {
					echo '<h2 style = "font-family: Arial; color: #ffccff; text-align: center;">Administrator Page</h2>
						<button><a href="newpost.php">New post</a></button>
						<button style="display: none;"><a href="login.php">Admin Login</a></button>
						<button><a href="logout.php">Logout</a></button>';
				}
			}
		 ?>
    <div id="board">
		<?php 
			while($row = mysqli_fetch_assoc($result)) {
      			echo "<strong>Title : {$row['title']}</strong> <br><br> ".
         			"{$row['content']} <br> ".
         			"<hr>";
   			}
		?>
	</div>

    <div id="footer">
		<?php include("copyright.php")?>
	</div>

</body>
</html>