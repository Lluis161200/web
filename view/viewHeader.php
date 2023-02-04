<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/styleHeader.css" media="screen" rel="Stylesheet" type="text/css" />
    <script src="../../js/jQuery.js"></script>

</head>
<body>
<header>
    <div class="nav">
        <a href="index.php" class="logo"><img src="../img/main/logo.png"> </a>
        <nav class="m">
            <a href="index.php?action=register" class="men"><i class="m"></i> Register</a>
            <a href="index.php?action=login" class="men"><i class="m"></i>  Login</a>
            <a href="index.php?action=categoria" class="men"><i class="m"></i>  Categorias</a>
        </nav>
        <i class="us"><img src="../img/main/us.png"></i>
        <nav class="navigation-menu">
            <a href="index.php?action=Perfil"><i class="perfil"></i> Mi perfil</a>
            <a href="index.php?action=Comandes"><i class="perfil"></i> Mi pedido</a>
            <a href="index.php?action=cerrar"><i class="perfil"></i> Cerrar sesion</a>
        </nav>
        <i class="carrito"><a href="index.php?action=Carrito"><img src="../img/main/carrito.png"></a></i>
        <div class="carritoInfo">
        <?php if($_SESSION['user_id']){
            echo $_SESSION['nItems'];?>items,
            <?php echo " ".$_SESSION['totalPrice'];?>€
        <?php } ?>
        </div>
    </div>
</header>
<script type="text/javascript">
    $(".us").click(function(){
        $(".navigation-menu").toggleClass("active");
    });
</script>



</body>
</html>
