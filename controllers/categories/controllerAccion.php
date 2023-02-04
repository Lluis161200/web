<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/categories/modelAccion.php';

$accion=getAccion();

require __DIR__ . '/../../view/categories/viewAccion.php';