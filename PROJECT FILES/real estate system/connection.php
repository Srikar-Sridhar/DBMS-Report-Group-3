<?php

$servername="localhost";
$username="root";
$password="";
$dbname="feedback_wtdbms";

$con= mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
    echo "Connection Established..!";
}
?>