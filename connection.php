<?php

$Servername:"localhost";
$username:"root";
$password:'';
$bdname:"port";

$conn = mysqli_connect($Servername,$username,$password,$bdname);
if($conn)
{
echo"connection succesfull";
}
else
{
    echo "connextion faild";
}


