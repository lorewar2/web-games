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

$q = strval($_GET['q']);
$r = strval($_GET['r']);

mysqli_select_db($con,"ajax_demo");

$sql = "INSERT INTO tetris (name,score) VALUES ('$q','$r')";

$result = mysqli_query($con,$sql);

mysqli_close($con);

?>
</body>
</html>