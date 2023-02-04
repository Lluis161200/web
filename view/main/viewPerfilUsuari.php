<?php
require __DIR__ . '/../../controllers/controllerHeader.php';
if($_SESSION['user_id']>0){
?>
<h1>Hola que tal</h1>


    <?php foreach ($usuari as $us):?>
        <?php $name = $us['username'];
        $email = $us['mail'];
        $path = $us['path'];
        $codip=$us['codip'];
        $poblacio=$us['poblacion'];
        if($codip)
        ?>
        <div> Mi nombre: <?php echo $name; ?> </div>
        <div> Mi mail: <?php echo $email; ?> </div>
        <div> Mi Codigo Postal: <?php echo $codip; ?> </div>
        <div> Mi Población: <?php echo $poblacio; ?> </div>
        <?php if($path!=NULL){?>
            <img src="/img/<?php echo $path;?>">
        <?php }?>



        <?php
    endforeach;
?>
    <a href="index.php?action=modifica">Modifica tu perfil</a>
    <?php
}
else
{?>
    <h1>Inicia Sesion</h1>
<?php
}
?>



