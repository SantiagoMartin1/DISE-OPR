
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" type="text/css" href="../.css/subir.css">
</head>
<body>
    <header>
            <nav>
                <a class="img-logo" href="principal.html"><img src="#" alt="#"></a>
                <button onclick="salir()"><img class="user-logo" src="../imgs/user--logo.png" alt="logo_user">
                    <!--
                    <?php
                    session_start();
                    session_destroy();
                   
                    echo '<script language="javascript">
                       alert("..:: SESIÓN CERRADA CORRECTAMENTE ::..");
                       window.location.href = "../index";
                       </script>';
                   ?>
                    -->
                    
                </button>
                <script>
                    document.getElementById('logoff').addEventListener('click', salir);
                    function salir() {
                        window.location.href = 'index.php';
                    }
                </script>
            </nav>            
    </header>
        <div class="container-todo">
        <main class="main">
            <div class="child-container-todo">
                <nav class="nav-main">
                    <div class="nav-nav">
                        <ul class="nav--menu">
                            <div class="nav-hover">
                                <li id="nav-lnks"><a id="nav-a" href="../html/config.php"><img class="settings-img" src="../imgs/settings_img.png" alt="settings-img"></a></li>
                            </div>
                            <div class="nav-hover">
                                <li id="nav-lnks"><a id="nav-a" href="../html/archivos.html"><img class="myFiles" src="../imgs/mis-archivos.png" alt="folder-img"></a></li>
                            </div>
                            <div class="nav-hover">
                                <li id="nav-lnks"><a id="nav-a" href="../html/subir.html"><img class="upFiles" src="../imgs/subir-archivos.png" alt="subir-img"></a></li>
                            </div>
                            <div class="nav-hover">
                                <li id="nav-lnks"><a id="nav-a" href="#"><img class="password-img" src="../imgs/change-password.png" alt="password-img"></a></li>
                            </div>
                            </ul>
                    </div>
                </nav>
                <div class="main-config">
                    <div class="dranNdrop">
                        <form onsubmit="return Validate(this);" action="../.php/Handler.php" method="post" name="form_onsubmit">
                            
                        
                            <div class = "drag-area">
                                <h2>Subí tu .midi ó .mp3</h2>
                                <span>0</span>
                                <button>Selecciona tus archivos</button>
                                <input type="file" name="sonido" id="input-file" hidden multiple accept=".mp3 , .wav, .mid" />
                            </div>
                            
                            <div id="preview"></div>

                        </form>
                    </div>                  
                </div>
            </div>
    </main>
        </div> 
    
    
        <!-- fetch("http://localhost:3000/datos-del-usuario") -->

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
                        <p class="footer_p">bla bla bla bla</p>
                    </div>
                </div>
                <div class="footer-lnks2">
                    <a class="contact_a" href="https://campus.ort.edu.ar/secundaria/belgrano/tic/2022-nr4d"><img class="ort-img" src="../imgs/logo_ort.png" alt="logo_ort"></a>
                </div>
            </div>          
        </footer>
    <script src="../js/subir.js"></script>
</body>
</html>