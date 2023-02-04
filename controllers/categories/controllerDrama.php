<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/categories/modelDrama.php';

$drama=getDrama();

require __DIR__ . '/../../view/categories/viewDrama.php';