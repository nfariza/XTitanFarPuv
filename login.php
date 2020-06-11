<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="color: #ff99cc; text-align: center; font-size: 40px";>X Titan E-Comm Announcement Board</h1>
            
    <div id="login">    
        <h2>Login</h2>
        <form action="admin.php" method="post">
            <label for="username">Username</label>
            <br>
            <input type="text" placeholder="username" name="username" size="35" required>
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" placeholder="password" name="password" size="35" required>
            <br> <br>
            <input class="button" type="submit" value="Login">
        </form>
    </div>
</body>
</html>