<?php



session_start();    
include("conexion.php");




// echo $_SESSION["mail"];

$nombre = $_POST["chng_name"];


// if(isset($_POST["btn_name"]))
// {

    $query4 = mysqli_query($conn,"UPDATE usuario SET Username = '".$nombre."' WHERE correo_electronico = '".$_SESSION["mail"]."'");
    // $row = mysqli_num_rows($query4);

    // var_dump($query4);

    if($query4)
    {   
        // echo "bien";
        echo "<script> alert ('realizado con exito'); window.location = '../DiseOprEn/html-en/config.html' </script>";
    }
    else
    {
       echo "<script> alert ('usuario no existe'); window.location = './DiseOprEn/html-en/config.html' </script>"; 
        
        //   echo "mal"; 
    }
    
// }
// else
// {
//     //echo "<script> alert ('error'); window.location = './DiseOprEn/html-en/config.html' </script>"; 
// }
// echo $_SESSION["mail"];
//header("Location: ../DiseOprEn/html-en/config.html");

 
?>