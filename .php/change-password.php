<?php


include("./conexion.php");
include("../DiseOprEn/chgPswrd.php");
session_start();


$pass = $_POST["chng_pass"];
$user = $_POST["actual_user"];




//$_SESSION["cambiar_pass"] = $_cambiar;


if(isset($_POST[$cambiar]))
{
    $query3 = mysqli_query($conn,"UPDATE proyecto 2022 set passenia = '".$pass."' WHERE usuario = '".$user."'");
    $row = mysqli_num_rows($query);

    if($row = 1)
    {
        echo "<script> window.location = '../.html/chgPswrd.hhtml' </script>";
    }
    else
    {
        echo "<script> alert ('usuario no existe'); window.location = '../.html/index.php' </script>"; 
           
    }


}



















?>