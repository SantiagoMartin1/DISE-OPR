<?php



session_start();    
include("conexion.php");




//echo $_SESSION["mail"];

$nombre = $_POST["chng_name"];


if(isset($_POST["btn_name"]))
{

    $query4 = mysqli_query($conn,"UPDATE usuario 2022 set Username = '".$nombre."' WHERE correo_electronico = '".$_SESSION["mail"]."'");
    $row = mysqli_num_rows($query4);

    if($row = 1)
    {   
        echo "<script> alert ('realizado con exito'); window.location = '../DiseOprEn/html-en/config.html' </script>";
    }
    else
    {
        echo "<script> alert ('usuario no existe'); window.location = './DiseOprEn/html-en/config.html' </script>"; 
        
           
    }
    
}
else
{
    echo "<script> alert ('error'); window.location = './DiseOprEn/html-en/config.html' </script>"; 
}

header("Location: ../DiseOprEn/html-en/config.html");

 
?>