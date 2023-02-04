<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/categories/modelDescription.php';

$desc=getDesc();

require __DIR__ . '/../../view/main/viewDescription.php';