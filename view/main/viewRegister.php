<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="../../css/main/styleRegisterPage.css" media="screen" rel="Stylesheet" type="text/css" />
</head>
<body>

<?php require __DIR__ . '/../../controllers/controllerHeader.php';?>

<div class="login">
    <p class="sign" align="center" >Sign Up</p>
    <form action="" method = "POST" class="form1">
        <div class="username">
            <label for="">Username</label>
            <input class="un" type="text" align="center" name="Username" placeholder="Introduzca su username">
        </div>
        <div class="mail">
            <label for="">Mail</label>
            <input class="un" type="email" align="center" name="Mail" placeholder="Introduzca su mail">
        </div>
        <div class="password">
            <label for="">Password</label>
            <input class="pass" type="password" align="center" name="Password" placeholder="Introduzca su contraseña">
        </div>
        <div>
            <label>Codi Postal <label>
                <input class="codip" type="text" name="codipostal" placeholder="Introduzca su codi postal" minlength="5" maxlength="5" required>
            </label>
        </div>
        <div class="input-box">
            <span class="details">Població</span>
            <label>
                <input class="pobla" type="text" name="poblacio" placeholder="Introduzca su població" maxlength="30" required>
            </label>
        </div>

        <input class="submit" align="center" type="submit" value="Register" name="Register">
        <a href="index.php?action=login">Login
</div>

<?php require_once __DIR__ . '/../viewFooter.php'; ?>

</body>
</html>