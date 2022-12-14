<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update my password</title>
    <link rel="stylesheet" type="text/css" href="../.css/restablecer.css">
</head>
<body>
    <header class="main-header">
        <div class="caja--logo">
            <a class="img-logo" href="principal.html"><img class="lgo_pyp" src="../imgs/lgo_pyp.png" alt="#"></a>
        </div>
        <nav>
            <a href="config.html">Back to menu</a>
        </nav>
</header>
   <main>
    <div class="main-container">
        <form action=" /DISE-OPR/DiseOprEn/DISE-OPR/.php/change-password.php" class="compare-pswrd" method="post"> 
            <div class="chk-pswrd">
                <label  for="txt-chk">Enter your new password: </label>
                <input  name = "actual_user" type="text" id="txt-chk" required placeholder="User name">
                <input  name = "chng_pass" type="password" id="txt-chk" required placeholder="New password">
                <input type="password" id="txt-chk" required placeholder="Confirm password">
            </div>
            <button class="btn-chg">Update password</button>
        </form>
    </div>
   </main>
</body>
</html>