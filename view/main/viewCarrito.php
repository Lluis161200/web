<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <link href="../../css/styleCarrito.css" media="screen" rel="Stylesheet" type="text/css" />
</head>

<?php require __DIR__ . '/../../controllers/controllerHeader.php';?>

<?php
header("refresh: 3;");
?>

<body>


<div id="pelis">
    <?php foreach ($productList as $product):?>
        <?php $name = $product['name'];
        $price = $product['precio'];
        $imgPath = $product['path'];
        $desc=$product['descripcion'];
        $id_cat=$product['id_category'];
        $id=$product['id'];
        $amount=$product['amount'];?>

        <div class="item" id=<?php echo $id;?>>
                <div id="title">
                <?php echo htmlentities($name,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>
                </div>

                <br>
                <div class="imageBox">
                    <div id="imagen">
                        <img src="../../img/categories/<?php echo htmlentities($id_cat,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>/<?php echo htmlentities($imgPath,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>">
                    </div>
                </div>
                <br>

                x<?php echo htmlentities($amount,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>

                <form action="">
                    <div class="comp">
                    <button type="button" id="btn-atc<?php echo $id;?>"><img class="comp" src="../../img/main/cruz.png"></button>
                    </div>
                </form>

        </div>

        <script type="text/javascript">
            $(document).ready(function (){
                $('#btn-atc<?php echo $id;?>').click(function() {
                    var userId = <?php echo $_SESSION['user_id']; ?>;
                    var prdoductId=<?php echo $id; ?>;
                    var ruta="UserID="+userId+"&ProductID="+prdoductId;
                    $.ajax({
                        url:'../../models/modelEliminarDelCarrito.php',
                        type:'POST',
                        data: ruta,
                    })
                        .done(function() {
                            $('#<?php echo $id;?>').html(" ")
                        })
                        .fail(function(){
                            console.log("error")
                        })
                        .always(function(){
                            console.log("completed")
                        });
                });
            });
        </script>

        <?php endforeach; ?>
</div>

<div id="carritoInfo">
    <?php if($_SESSION['user_id']){
        echo $_SESSION['nItems'];?>items,
        <?php echo " ".$_SESSION['totalPrice'];?>€
    <?php } ?>

    <br>

    <?php if($_SESSION['nItems']>0){ ?>
    <form action="">
        <div class="comp">
            <button type="button" id="btn-comprar"><img class="comp" src="../../img/main/añadircarrito.png"></button>
        </div>
    </form>
     <?php } ?>

</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#btn-comprar').click(function() {
            var userId = <?php echo $_SESSION['user_id']; ?>;
            var nItems = <?php echo $_SESSION['nItems']; ?>;
            var totalPrice = <?php echo $_SESSION['totalPrice']; ?>;
            var ruta="UserID="+userId+"&nItems="+nItems+"&totalPrice="+totalPrice;
            $.ajax({
                url:'../../models/modelComprarCarrito.php',
                type:'POST',
                data: ruta,
            })
                .done(function() {
                    $('#pelis').html('Compra realitzada.')
                    $('#carritoInfo').html(' ')
                })
                .fail(function(){
                    console.log("error")
                })
                .always(function(){
                    console.log("completed")
                });
        });
    });
</script>

</body>

<?php require_once __DIR__ . '/../viewFooter.php'; ?>