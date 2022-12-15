<?php


session_start();

include("./conexion.php");

include("../html/index.html");
include("../DiseOprEn/html-en/index.html");




$name_register = $_POST ["nombre_register"];
$mail_register = $_POST ["email_register"];
$usuario_register = $_POST ["user_register"];
$pass_register = $_POST ["pass_register"];
$pass2_register = $_POST ["pass2_register"];
$mail_login = $_POST ["email_login"];
$pass_login = $_POST ["pass_login"];


$_SESSION["mail"] = $mail_login;







 

if(isset($_POST['btn-primary-login']))
{
    $query = mysqli_query($conn,"SELECT * FROM Usuario WHERE  = '".$mail_login."' AND Passenia = '".$pass_login."'");
    $row = mysqli_num_rows($query);

    if($row = 1)
    {
        $_SESSION["mail"] = $mail_login;
        echo "<script> alert ('Bienvenido,".$usu_login."'); window.location = '../html/config.html' </script>";
    }
    else
    {
        echo "<script> alert ('usuario no existe'); window.location = 'index.php' </script>"; 
           
    }


}

if(isset($_POST['btn-primary-register']))

{
    
    if($pass_register == $pass2_register)
    {
        
            $query2 = "INSERT INTO usuario (Username,Passenia,correo_electronico,Nombre_completo) values ('".$usuario_register."','".$pass_register."','".$mail_register."','".$name_register."')";
        
            if(mysqli_query($conn,$query2))
            {
                echo "<script> alert ('Usuario registrado con exito:".$usuario_register."'); window.location = '../html/config.html' </script>";
            }
            else
            {
                echo "Error:".$query2."<br>".mysql_error($conn);
            }
        

    }
    else
    {
        echo "<script> alert ('Las contraseñas no coinciden. Constátese que sean iguales.'); window.location = 'index.php' </script>";
    }

}

 

 






?>