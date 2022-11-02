
<?php
include_once("../.php/conexion.php");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
    <link rel="stylesheet" type="text/css" href="../.css/archivos.css">

</head>
<body>
    <header>
        <div class="header--container">
            <div class="caja--logo">
                <a class="img-logo" href="principal.html"><img src="#" alt="#"></a>
            </div>
            <div class="header-lnks">
                    <div class="header--usu">
                        <a href="account.html"><img class="user-logo" src="../imgs/user--logo.png" alt="logo_user"></a>
                    </div>
            </div>
        </div>
    </header>
    <nav class="nav-main">
        <div class="nav-nav">
            <ul class="nav--menu">
                <div class="nav-hover">
                    <li id="nav-lnks"><a id="nav-a" href="#"><img class="settings-img" src="../imgs/settings_img.png" alt="settings-img"></a></li>
                </div>
                <div class="nav-hover">
                    <li id="nav-lnks"><a id="nav-a" href="#"><img class="myFiles" src="../imgs/mis-archivos.png" alt="folder-img"></a></li>
                </div>
                <div class="nav-hover">
                    <li id="nav-lnks"><a id="nav-a" href="archivos.html"><img class="upFiles" src="../imgs/subir.png" alt="subir-img"></a></li>
                </div>
                <div class="nav-hover">
                    <li id="nav-lnks"><a id="nav-a" href="#"><img class="password-img" src="../imgs/change-password.png" alt="password-img"></a></li>
                </div>
                </ul>
        </div>
    </nav>  
    <main>
        <form action="" method="get">
        <div class="card" id="mostrar-archivos">
            <?php
                for($i = 0; $i < count($data); $i++){
                   
                   echo "<label for='palabra'>Palabra</label>";

                }
            ?>
        </div>
        </form>
    </main>  
    
        <footer class="footer-main">
            <div class="footer-container">
                <hr class="footer_hr">
                <div class="footer-lnks1">
                    <a href="https://www.instagram.com/santi_.martin/"><img class="logo-ig" src="../imgs/logo--ig.png" alt="instagram"></a>
                </div>
                <div class="footer--info">
                    <div class="footer-h5">
                        <h5 class="footer_h5">Sobre nosotros</h5>
                    </div>
                    <div class="footer-p">
                        <p class="footer_p">bla bla bla bla</p>
                    </div>
                </div>
                <div class="footer-lnks2">
                    <a class="contact_a" href="https://campus.ort.edu.ar/secundaria/belgrano/tic/2022-nr4d"><img class="ort-img" src="../imgs/ort-logo.png" alt="logo_ort"></a>
                </div>
            </div>          
        </footer>
    
    <script src="archivos.js"></script>
</body>
</html>