<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/categories/modelThriller.php';

$thriller=getThriller();

require __DIR__ . '/../../view/categories/viewThriller.php';