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

$sql = "SELECT * FROM tank ORDER BY score DESC";

$result = mysqli_query($con,$sql);

$stringarray  = array();

while($row = mysqli_fetch_array($result)) {
    array_push($stringarray,"<p>" . $row['name'] .": ". $row['score'] . "</p>");
    $x++;
    if($x > 4)
        break;
}

foreach ($stringarray as &$value) {
    echo $value;
}

mysqli_close($con);

?>
</body>
</html>