<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    <link href="../../css/styleCategories.css" media="screen" rel="Stylesheet" type="text/css" />
</head>
<body>
<?php require __DIR__ . '/../../controllers/controllerHeader.php';?>

<div class="row">
    <ul>
        <?php foreach ($categorias as $categoria):?>


          <?php $categoryName = rtrim($categoria['name']);
            $categoryId = $categoria['id'];?>

        <li class="<?php echo $categoryId;?>">
            <a class="catLink" miattribute="">
                <?php echo $categoryName;?>
            </a>
            <?php endforeach;?>

        </li>

    </ul>

</div>

<div class="Pelis"></div>

<?php require_once __DIR__ . '/../viewFooter.php'; ?>

</body>


<script type="text/javascript">
    $(document).ready(function (){
        
        $(".1").click(function() {
            $('.Pelis').load('index.php?action=Drama&category_id=1')
        });
        $(".2").click(function() {
            $('.Pelis').load('index.php?action=Acción&category_id=2')
        });
        $(".3").click(function() {
            $('.Pelis').load('index.php?action=Animación&category_id=3')
        });
        $(".4").click(function() {
            $('.Pelis').load('index.php?action=Thriller&category_id=4')
        });
    })
</script>

</html>