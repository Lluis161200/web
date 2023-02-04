<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acción</title>
    <link href="../../css/main/styleDetailProduct.css" media="screen" rel="Stylesheet" type="text/css" />
    <script src="../../js/funciones.js"></script>


</head>
<div align="center">
    <?php foreach ($prod as $product):?>

        <?php $name = $product['name'];
        $price = $product['precio'];
        $imgPath = $product['path'];
        $desc=$product['descripcion'];
        $id_cat=$product['id_category'];
        $id=$product['id']; ?>

        <div id="detail">

            <div id="name">
                <?php echo htmlentities($name,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>
            </div>

            <?php echo "<br>";?>
            <div id="desc">
                <?php echo htmlentities($desc,ENT_QUOTES | ENT_HTML5, 'UTF-8' ) ;?>
            </div>

            <?php echo "<br>";?>
            <div id="imagen">
                <img src="../../img/categories/<?php echo htmlentities($id_cat,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>/<?php echo htmlentities($imgPath,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>">
            </div>

            <?php echo "<br>";?>
            <div id="price">
                <?php echo htmlentities($price,ENT_QUOTES | ENT_HTML5, 'UTF-8' );echo "€";?>
            </div>

            <?php echo "<br>";?>
            <?php if($_SESSION['user_id']){ ?>
                <form action="">
                    <p>N.Items <input type="number" id="quantity" name="quantity" min="1" max="100" step="1" value="1"></p>
                    <br>
                    <button type="button" class="comp" id="btn-atc"><img class="comp" src="../../img/main/añadircarrito.png"></button>
                    <br><br>
                    <div id ="response"></div>
                </form>
            <?php }
            else{?>
                <a class="comp" href="index.php?action=login""><img class="comp" src="../../img/main/añadircarrito.png"></a>
            <?php }?>

        </div>

    <?php endforeach;?>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#btn-atc').click(function() {
            var userId = <?php echo $_SESSION['user_id']; ?>;
            var prdoductId=<?php echo $id; ?>;
            var amount = document.getElementById('quantity').value;
            var ruta="UserID="+userId+"&ProductID="+prdoductId+"&Amount="+amount;
            $.ajax({
                url:'../../models/modelAfegirAlCarrito.php',
                type:'POST',
                data: ruta,
            })
                .done(function(res) {
                    $('#response').html(res)
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

