<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acción</title>
    <link href="../../css/styleCategories.css" media="screen" rel="Stylesheet" type="text/css" />
</head>
<body>


<h1> hola</h1>
<div class="row">
    <ul>
        <?php foreach ($desc as $d):?>


        <?php $dName = rtrim($d['name']);
        $dDesc = $d['descrpcion'];
        $dPrecio = $d['precio'];
        $dImg = $d['path'];?>

        <?php echo($dName);?>

        <?php endforeach;?>

        </li>

    </ul>

</div>
</body>