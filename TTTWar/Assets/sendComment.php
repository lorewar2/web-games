<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

$con = mysqli_connect('localhost','minibndo_user','avarice','minibndo_first');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$date = strval(gmdate("h:i:s A"));


$ip = strval($_SERVER['REMOTE_ADDR']);

$q = strval($_GET['q']);

mysqli_select_db($con,"ajax_demo");

$sql = "INSERT INTO TTTchat (TDate,IP,Comment) VALUES ('$date','$ip','$q')";

$result = mysqli_query($con,$sql);

mysqli_close($con);

?>
</body>
</html>