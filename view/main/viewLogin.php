<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="../../css/main/styleLoginPage.css" media="screen" rel="Stylesheet" type="text/css" />
</head>
<body>

<?php require __DIR__ . '/../../controllers/controllerHeader.php';?>

<div class="login">
    <p class="sign" align="center" >Login</p>
    <form action="" method = "POST" class="form1">
        <div class="mail">
            <label for="">Mail</label>
            <input class="un" type="email" align="center" name="Mail">
        </div>
        <div class="password">
            <label for="">Password</label>
            <input class="pass" type="password" align="center" name="Password">
        </div>
        <input class="submit" align="center" type="submit" value="Login" name="Login">
        <p class="SignUp" align="center"><a href="index.php?action=register">Sign Up</p>
</div>

<?php require_once __DIR__ . '/../viewFooter.php'; ?>

</body>
</html>