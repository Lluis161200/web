<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/modelPerfilUsuari.php';
$usuari=getUsuari();
require_once __DIR__ . '/../../models/modelModificaPerfil.php';


require __DIR__ . '/../../view/main/viewModificaPerfil.php';
Modifica();