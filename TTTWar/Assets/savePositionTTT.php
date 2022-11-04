
<?php

$con = mysqli_connect('localhost','minibndo_user','avarice','minibndo_first');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");

$q = strval($_GET['q']);

$sql = "DELETE FROM TTT";

$result = mysqli_query($con,$sql);

$sql = "INSERT INTO TTT (view) VALUES ('$q')";

$result = mysqli_query($con,$sql);

mysqli_close($con);

?>
