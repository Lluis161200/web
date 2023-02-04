<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/modelPerfilUsuari.php';
if($_SESSION['user_id']>0){
    $usuari=getUsuari();
}

require __DIR__ . '/../../view/main/viewPerfilUsuari.php';