
<?php
session_start();
$action=$_GET['action'];

switch($action){
    //OPCIONES MAIN
    case 'login':
        require __DIR__ . '/controllers/main/controllerLogin.php';
        break;
    case 'register':
        require __DIR__ . '/controllers/main/controllerRegister.php';
        break;
    case 'categoria':
        require __DIR__ . '/controllers/main/controllerCategory.php';
        break;
    case 'Perfil':
        require __DIR__ . '/controllers/main/controllerPerfilUsuari.php';
        break;
    case 'cerrar':
        require __DIR__ . '/controllers/main/controllerCerrar.php';
        break;
    case 'Carrito':
        require __DIR__ . '/controllers/main/controllerCarrito.php';
        break;
    case 'Comandes':
        require __DIR__ . '/controllers/main/controllerComandes.php';
        break;
    case 'modifica':
        require __DIR__ . '/controllers/main/controllerModificaPerfil.php';
        break;
    case 'detallProduct':
        require __DIR__ . '/controllers/main/controllerDetallesProducto.php';
        break;
    case 'Fincompra':
        require __DIR__ . '/controllers/main/controllerFinalizarCompra.php';
        break;
    //CATEGORIAS
    case 'Drama':
        require __DIR__ . '/controllers/categories/controllerDrama.php';
        break;
    case 'Thriller':
        require __DIR__ . '/controllers/categories/controllerThriller.php';
        break;
    case 'Acción':
        require __DIR__ . '/controllers/categories/controllerAccion.php';
        break;
    case 'Animación':
        require __DIR__ . '/controllers/categories/controllerAnimacion.php';
        break;
    case 'Description':
        require __DIR__ . '/controllers/main/controllerDescription.php';
        break;

    //MAIN PAGE
    default:
        require __DIR__ . '/controllers/main/controllerMainPage.php';
        break;
}

?>