<?php

include "database.php";

$esm = $_POST["firstname"];
$famil = $_POST["lastname"];
$mobile = $_POST["mobile"];
$mail = $_POST["email"];
$tavalod = $_POST["birthday"];
$aks = $_POST["img"];

mysqli_query($connection,"INSERT INTO specs(firstname , lastname ,mobile,email,birthday,img) VALUES('$esm','$famil','$mobile','$mail','$tavalod','$aks')");

header("location: index.php");

?>