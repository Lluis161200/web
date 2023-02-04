<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require __DIR__ . '/../../models/modelMainPage.php';

$peliculas=getMain();

require __DIR__ . '/../../view/main/viewMainPage.php';


