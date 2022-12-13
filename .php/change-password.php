<?php

include("ChgPswrd.html");
session_start();

$cambiar = $_POST ["Cambiar_pass"];

$mail_login = $_SESSION["mail"];

if(isset($_POST[$cambiar]))
{
    $query3 = mysqli_query($conn,"UPDATE    = '".$mail_login."'");
    $row = mysqli_num_rows($query);

    if($row = 1)
    {
        echo "<script> alert ('Bienvenido,".$usu_login."'); window.location = '../.html/principal.html' </script>";
    }
    else
    {
        echo "<script> alert ('usuario no existe'); window.location = '../.html/index.php' </script>"; 
           
    }


}



















?>