<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/modelComandes.php';

if ($_SESSION['user_id']) {
    $comandes = getComandes();
}

require __DIR__ . '/../../view/main/viewComandes.php';

