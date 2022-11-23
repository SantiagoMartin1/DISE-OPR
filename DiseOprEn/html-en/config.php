
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" type="text/css" href="../.css/config.css">
</head>
<body>
    <header>
            <nav>
                <a class="img-logo" href="principal.html"><img src="#" alt="#"></a>
                <a href="config.php"><img class="user-logo" src="../imgs/user--logo.png" alt="logo_user"></a>
            </nav>            
    </header>
        <div class="container-todo">
        <main class="main">
            <div class="child-container-todo">
                <nav class="nav-main">
                    <div class="nav-nav">
                        <ul class="nav--menu">
                            <div class="nav-hover">
                                <li id="nav-lnks"><a id="nav-a" href="config.php"><img class="settings-img" src="../imgs/settings_img.png" alt="settings-img"></a></li>
                            </div>
                            <div class="nav-hover">
                                <li id="nav-lnks"><a id="nav-a" href="archivos.html"><img class="myFiles" src="../imgs/mis-archivos.png" alt="folder-img"></a></li>
                            </div>
                            <div class="nav-hover">
                                <li id="nav-lnks"><a id="nav-a" href="subir.html"><img class="upFiles" src="../imgs/subir-archivos.png" alt="subir-img"></a></li>
                            </div>
                            <div class="nav-hover">
                                <li id="nav-lnks"><a id="nav-a" href="#"><img class="password-img" src="../imgs/change-password.png" alt="password-img"></a></li>
                            </div>
                            </ul>
                    </div>
                </nav>
                <div class="main-config">
                    <div class="main-name">
                        <form action="#" method="post">
                            <div class="name-chg">
                                <h3 id="main-tittle">
                                    <?php
                                     session_start();   
                                     echo $_SESSION["newsession"];
                                    ?>
                                </h3>
                                <input type="text" id="txt-name" required name = "chng_name"
                                 minlength="4" maxlength="12" placeholder="Enter your new name">
                            </div>
                            <div class="sbmt-div">
                                <input type="submit" value="Update my name" class="btn-name">
                            </div>
                        </form>                  
                    </div>
                    <div class="main-idioma">
                        <div class="form-idioma">
                            <form action="#" class="form-idioma" method="post">
                                <div class="idioma-chg">
                                    <label for="Idiomas">Change Language: </label>
                                </div>
                                <div class="flags-container">
                                    <a href="../../html/config.php" class="translate" id="es"><img src="../imgs/es-flag.jpg" alt=""></a>
                                    <a href="config.php" class="translate" id="en"><img src="../imgs/en-flag.jpg" alt=""></a>  
                                </div>                              
                            </form>
                        </div>
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
                        <h5 class="footer_h5">About Us</h5>
                    </div>
                    <div class="footer-p">
                        <p class="footer_p">Group of students whose achievement is to pass this subject</p>
                    </div>
                </div>
                <div class="footer-lnks2">
                    <a class="contact_a" href="https://campus.ort.edu.ar/secundaria/belgrano/tic/2022-nr4d"><img class="ort-img" src="../imgs/logo_ort.png" alt="logo_ort"></a>
                </div>
            </div>          
        </footer>
    <script src="../js/config.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../multilanguaje-json/translate.js" charset="utf-8"></script>
</body>
</html>