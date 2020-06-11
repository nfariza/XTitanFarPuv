<html>
<head>
	<title>New Post</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body {
			
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
    <h2>Administrator Page</h2>
	<div id="newpost">
		<h1>Create a new post.</h1>
		<form action = "post.php" method="post">

			Title: <br> <textarea rows = "2" cols = "50" name = "title"></textarea>
			<br><br>

			Content: <br> <textarea rows = "5" cols = "50" name = "content"></textarea>
			<br><br>

			<input id="buttonpost" type="submit" name="insert" value="Post">

		</form>
	</div>
	
		<button><a href="logout.php">Logout</a></button>

</body>
</html>