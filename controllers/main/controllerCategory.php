
<?php

require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/modelCategory.php';

$categorias=getCategorias();

require __DIR__ . '/../../view/main/viewCategoryList.php';
