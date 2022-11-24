<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donde ocurre la magia</title>
    <link rel="stylesheet"  href="../.css/p&P.css">
</head>
<body>
    <header class="main-header">
        <div class="volver-container">
            <a href="../html/principal.html"><img class="lgo_pyp" src="../imgs/lgo_pyp.png" alt="#"></a>
        </div>
        <nav class="navbar">
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()"><img src="../imgs/user_Icon.png" alt="user_Icon" class="user-icon">
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="#">Configuración</a>
                    <a href="#">Mis archivos</a>
                    <a href="#">Log Out</a>
                </div>
            </div>
            <a href="#">Home</a>
            <a href="#">News</a>
        </nav>
    </header>
    <main>
    <!--
        
        
    
        -->
        

        
        <div class="container-pyP">
            <form onsubmit="return Validate(this);" method="post" action="#">
                <div class="dropZone">
                <input type="file" name="my file" accept=".mp3 , .wav, .mid" id="fileInput"
                
                <?php
        /*
                //función para obtener el nombre de las carpetas y los archivos en array multidimensional
                function dirToArray($dir) {
         
                    //creo un array
                    $listDir = array();
         
                    //abro los directorios contenidos en $dir
                    if($handler = opendir($dir)) {
         
                        //leo todos los elementos contenidos 
                        while (($file = readdir($handler)) !== FALSE) {
         
                            //verifico que hayan elementos
                            if ($file != "." && $file != "..") {
         
                                /*si los elementos son archivos, guardo los elementos 
                                en algún indice (dimensión) del array*/
                             //   if(is_file($dir."/".$file)) {
                               //     $listDir[] = $file;
         
                                /*si los elementos son directorios, guardo los elementos 
                                en otro índice o dimensión, repitiendo hasta que hayan elementos*/
                                //}elseif(is_dir($dir."/".$file)){
                                //    $listDir[$file] = dirToArray ($dir."/".$file);
                       //         }
                       //     }
                       // }
                      //  closedir($handler);
                   // }
                    //return $listDir;
               // } 
                /*
                $dir = "xxx/";
                $listDir = dirToArray($dir);    
                echo $listDir[2][1];
                if($listDir >= [0]){
                    echo"<script> alert ('Array:" .$listDir."'); window.location = '../.html/p&P.php' </script>";
                }*/
                ?>
                
                />
                <br />
                <h5 id="filename"></h5>
                <input type="submit" value="Submit" onclick="Validate()" class="submit" />
                </div>
              </form>
        </div>
    </main>
    <footer class="footer-main">
        <div class="footer-container">
            <hr class="footer_hr">
            <div class="footer-lnks1">
                <a href="https://www.instagram.com/santi_.martin/"><img class="logo-ig" src="..//imgs/logo--ig.png" alt="instagram"></a>
            </div>
            <div class="footer--info">
                <div class="footer-h5">
                    <h5 class="footer_h5">Sobre nosotros</h5>
                </div>
                <div class="footer-p">
                    <p class="footer_p">Grupo de alumnos cuyo obajetivo es aprobar esta materia ;)</p>
                </div>
            </div>
            <div class="footer-lnks2">
                <a class="contact_a" href="https://campus.ort.edu.ar/secundaria/belgrano/tic/2022-nr4d"><img class="ort-img" src="../imgs/ort-logo.png" alt="logo_ort"></a>
            </div>
        </div>          
    </footer>
    <script src="../js/p&P.js"></script>
</body>
</html>