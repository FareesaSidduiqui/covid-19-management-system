<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "coronadbms";

$con = mysqli_connect($server,$user,$password,$db,4306);
mysqli_report(MYSQLI_REPORT_ALL);
mysqli_report(MYSQLI_REPORT_STRICT);


 if(!$con){
    echo "";
    }


?>