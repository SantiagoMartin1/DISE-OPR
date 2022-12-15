<?php



session_start();    
include("conexion.php");




// echo $_SESSION["mail"];

$pass = $_POST["chng_pass"];
$user = $_POST["actual_user"];


// if(isset($_POST["btn_name"]))
// {

    $query5 = mysqli_query($conn,"UPDATE usuario SET Passenia = '".$pass."' WHERE Username = '".$user."'");
    // $row = mysqli_num_rows($query4);

    // var_dump($query4);

    if($query5)
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