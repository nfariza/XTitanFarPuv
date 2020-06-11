<?php
$con = mysqli_connect("localhost", "root", "", "announcementboard");

if($con) {
    echo "Connection successful.";
} else {
    echo "Connection not successful.";
}

$title = $_POST['title'];
$content = $_POST['content'];

$query = "INSERT INTO post(title, content) values ('$title', '$content')";	
$result = mysqli_query($con, $query);

if($result)
header("Location: index.php");
?>