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

mysqli_select_db($con,"ajax_demo");

$sql = "DELETE FROM TTTchat";

$result = mysqli_query($con,$sql);

mysqli_close($con);

?>
</body>
</html>