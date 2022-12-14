
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" type="text/css" href="config.css">
</head>
<body>
    <header>
        <div class="header--container">
            <div class="caja--logo">
                <a class="img-logo" href="principal.html"><img src="#" alt="#"></a>
            </div>
            <div class="header-lnks">
                    <div class="header--usu">
                        <a href="account.html"><img class="user-logo" src="user--logo.png" alt="logo_user"></a>
                    </div>
            </div>
        </div>
    </header>
    <div class="container-todo">
        <div class="child-container-todo">
        <nav class="nav-main">
            <div class="nav-nav">
                <ul class="nav--menu">
                    <div class="nav-hover">
                        <li id="nav-lnks"><a id="nav-a" href="#"><img src="#" alt="#"></a></li>
                    </div>
                    <div class="nav-hover">
                        <li id="nav-lnks"><a id="nav-a" href="#">Mis archivos</a></li>
                    </div>
                    <div class="nav-hover">
                        <li id="nav-lnks"><a id="nav-a" href="archivos.html">Subir archivos</a></li>
                    </div>
                    <div class="nav-hover">
                        <li id="nav-lnks"><a id="nav-a" href="#">Cambiar contraseña</a></li>
                    </div>
                    </ul>
            </div>
        </nav>
        <main>
            <div class="main-config">
                <div class="main-name">
                    <form action="post">
                        <div class="name-chg">
                            <h3 id="main-tittle">
                                <?php
                                 session_start();   
                                echo $_SESSION["newsession"];
                                ?>
                            </h3>
                            <input type="text" id="txt-name" required
                             minlength="4" maxlength="8" size="10">
                        </div>
                        <div class="sbmt-div">
                            <input type="submit" value="Cambiar nombre" class="btn-name">
                        </div>
                    </form>                  
                </div>
                <div class="main-idioma">
                    <div class="form-idioma">
                        <form action="post" class="form-idioma">
                            <div class="idioma-chg">
                                <label for="Idiomas">Cambiar Idioma: </label>
                                <select name="Idiomas" class="Idioma">
                                    <option value="Ingles">Ingles</option>
                                    <option value="Esnpaniol">Español</option>
                                </select>    
                            </div>
                            <div class="idioma-sbmt">
                                <input type="submit" value="Guardar cambios" class="btn-idiomas">
                            </div>
                            </form>
                    </div>
                </div>
                <div class="main-pswrd">
                    <a href="#" class="fgt-pswrd">Olvide mi contraseña</a>
                </div>
            </div>
    </main>
        </div> 
    </div>
    
    
        <!-- fetch("http://localhost:3000/datos-del-usuario") -->

        <footer class="footer-main">
            <div class="footer-container">
                <hr class="footer_hr">
                <div class="footer-lnks1">
                    <a href="https://www.instagram.com/santi_.martin/"><img class="logo-ig" src="./logo--ig.png" alt="instagram"></a>
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
                    <a class="contact_a" href="https://campus.ort.edu.ar/secundaria/belgrano/tic/2022-nr4d"><img class="ort-img" src="ort-logo.png" alt="logo_ort"></a>
                </div>
            </div>          
        </footer>
    <script src="config.js"></script>
</body>
</html>