<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/categories/modelAnimacion.php';

$animacion=getAnime();

require __DIR__ . '/../../view/categories/viewAnimacion.php';