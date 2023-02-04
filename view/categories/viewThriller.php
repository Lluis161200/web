<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acción</title>
    <link href="../../css/styleCategories.css" media="screen" rel="Stylesheet" type="text/css" />
    <script src="../../js/funciones.js"></script>


</head>
<body>

<div align="center">
    <h1>THRILLER</h1>
</div>



<div id="pelis">
    <?php foreach ($thriller as $product):?>

        <?php $name = $product['name'];
        $price = $product['precio'];
        $imgPath = $product['path'];
        $id=$product['id']; ?>

        <div class="item" id=<?php echo $id;?>>

            <?php echo htmlentities($name,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>

            <div class="imageBox">
                <a onclick="detallesProductos(<?php echo htmlentities($id,ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>)"><img src="../../img/main/<?php echo htmlentities($imgPath,ENT_QUOTES | ENT_HTML5, 'UTF-8' );?>" ></a>
            </div>

            <div class="actions">
                <a class="btn" onclick="detallesProductos(<?php echo htmlentities($id,ENT_QUOTES | ENT_HTML5, 'UTF-8' ) ?>)"><img src="../../img/main/info.png"></a>
                <h3><?php echo htmlentities($price,ENT_QUOTES | ENT_HTML5, 'UTF-8' );echo "€"; ?></h3>
            </div>
            <?php echo "<br>";?>
            <?php if($_SESSION['user_id']){ ?>
                <form action="">
                    <p>N.Items <input type="number" id="quantity<?php echo $id;?>" name="quantity<?php echo $id;?>" min="1" max="100" step="1" value="1"></p>
                    <br>
                    <div class="comp">
                        <button type="button" id="btn-atc<?php echo $id;?>"><img class="comp" src="../../img/main/añadircarrito.png"></button>
                    </div>
                    <br><br>
                    <div id ="response<?php echo $id;?>"></div>
                </form>

            <?php }
            else{?>
                <a class="comp" href="index.php?action=login""><img class="comp" src="../../img/main/añadircarrito.png"></a>
            <?php }?>

        </div>


        <script type="text/javascript">
            $(document).ready(function (){
                $('#btn-atc<?php echo $id;?>').click(function() {
                    var userId = <?php echo $_SESSION['user_id']; ?>;
                    var prdoductId=<?php echo $id; ?>;
                    var amount = document.getElementById('quantity<?php echo $id;?>').value;
                    var ruta="UserID="+userId+"&ProductID="+prdoductId+"&Amount="+amount;
                    $.ajax({
                        url:'../../models/modelAfegirAlCarrito.php',
                        type:'POST',
                        data: ruta,
                    })
                        .done(function(res) {
                            $('#response<?php echo $id;?>').html(res)
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

    <?php endforeach;?>
</div>

</body>

</html>