
<?php

$con = mysqli_connect('localhost','minibndo_user','avarice','minibndo_first');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");

$sql = "SELECT view FROM TTT";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo $row['view'];
    break;
}

mysqli_close($con);

?>
