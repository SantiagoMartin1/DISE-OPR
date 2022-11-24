<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../.css/style.css">
</head>
<body>

    <header>

        <div class="header--container">
                <nav>
                    <a class="img-logo" href="principal.html"><img class="lgo_pyp" src="../imgs/lgo_pyp.png" alt="#"></a>
                    <a href="https://www.instagram.com/santi_.martin/"><img class="logo-ig" src="../imgs/logo--ig.png" alt="instagram"></a>
                    <a class="contact_a" href="https://campus.ort.edu.ar/secundaria/belgrano/tic/2022-nr4d"><img class="ort-img" src="../imgs/logo_ort.png" alt="logo_ort"></a>
                    <div class="card" id="mostrar-archivos">
                </nav>
        </div>
    </header>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Already have an account?</h3>
                        <p>Login to enter the page</p>
                        <button id="btn__iniciar-sesion">Log In</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Don't have an account yet?</h3>
                        <p>Register so you can log in</p>
                        <button id="btn__registrarse">Register</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="../.php/Handler.php" method="post" class="formulario__login">
                        <h2>Log In</h2>
                        <input  name = "email_login" type="email" placeholder="Email">
                        <input name = "pass_login" type="password" placeholder="Password">
                        <button id="btn-primary-login" value="OK" name="btn-primary-login">Enter</button>
                        <div class="caja__contrasenia">
                            <label for="contraseña">Forgot your password?</label>
                            <p><a name="contraseña" href="chgPswrd.html">click to reset your password</a></p>
                        </div>
                    </form>

                    <!--Register-->
                    <form action="../.php/Handler.php" method="post" class="formulario__register">
                        <h2>Register</h2>
                        <input type="text" placeholder="Full name" id="Nombre" name="nombre_register">
                        <input type="email" placeholder="Email" id="exampleInputEmail1" name="email_register">
                        <input type="text" placeholder="User" id="#" name="user_register">
                        <input type="password" placeholder="Password" id="exampleInputPassword1" name="pass_register">
                        <input type="password" placeholder="Confirm Password" id="exampleInputPassword2" name="pass2_register">
                        <button id="btn-primary-register" value="OKR" name="btn-primary-register">Register</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="../js/index.js"></script>
</body>
</html>