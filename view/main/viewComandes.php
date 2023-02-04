<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <link href="../../css/main/styleComandes.css" media="screen" rel="Stylesheet" type="text/css" />
</head>

<?php require __DIR__ . '/../../controllers/controllerHeader.php';?>

<body>

<?php $nComandes = 0;?>
<div class="comandes">
<?php foreach ($comandes as $element):?>

<?php $date = $element['fecha'];
$price = $element['precio'];
$cantidad = $element['cantidad'];
$id=$element['id'];
$nComandes=$nComandes+1;
?>

<div class="item" id=<?php echo $id;?>>
    <div id="title">
       <h1> Comanda <?php echo htmlentities($nComandes,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?></h1>
    </div>
    <br>
    x<?php echo htmlentities($cantidad,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>
    <br>
    <?php echo htmlentities($price,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>€
    <br>
    <?php echo htmlentities($date,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>
    <br>
    <br>
    <br>
</div>

<?php endforeach;?>
</div>


</body>

<?php require_once __DIR__ . '/../viewFooter.php'; ?>