<?php

include "database.php";

$del = $_POST["btn_del"];


mysqli_query($connection,"DELETE FROM specs");

header("location: index.php");

?>