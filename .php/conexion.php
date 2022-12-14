<?php

$dbhost = "localhost";
$dbuser= "root";
$dbpass = "rootroot";
$dbname = "proyecto 2022";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
    die("No se pudo conectar al servidor:" .mysqli_connect_error());
    
}
?>