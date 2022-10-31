<?php

echo "hola mundo";

include_once("./conexion.php");

$mail_login =  $_POST ["email_login"];
$pass_login = $_POST ["pass_login"];

$name_register = $_POST ["nombre_register"];
$mail_register = $POST ["email_register"];
$usuario_register = $POST ["user_register"];
$pass_register = $POST ["pass_register"];
$pass2_register = $POST ["pass2_register"];



if(isset($_POST["btn-primary-login"]))
{
    $query = mysqli_query($conn,"SELECT * FROM Usuario = '".$usu_login."' AND Passenia = '".$pass_login."'");
    $row = mysqli_num_rows($query);

    if($row == 1)
    {
        echo "<script> alert ('Bienvenido,".$usu_login."'); window.location = 'principal.html' </script>";
    }
    else
    {
        echo "<script> alert ('usuario no existe'); window.location = 'index.html' </script>";    
    }


}

if(isset($_POST["btn-primary-register"]))
{
    if($pass_register == $pass2_register)
    {
        
            $query2 = "INSERT INTO usuario (Username,Passenia,correo_electronico,Nombre_completo) values ('".$usuario_register."','".$pass_register."','".$mail_register."','".$name_register."')";
        
            if(mysqli_query($conn,$query2))
            {
                echo "<script> alert ('Usuario registrado con exito:".$usuario_register."'); window.location = 'index.html' </script>";
            }
            else
            {
                echo "Error:".$query2."<br>".mysql_error($conn);
            }
        

    }
    else
    {
        echo "<script> alert ('Las contraseñas no coinciden. Constatesé que sean iguales.'); window.location = 'index.html' </script>";
    }

}


 






?>