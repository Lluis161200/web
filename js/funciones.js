function ProductCarrito(id){
    $.get( '/index.php?action=Carrito', {id : id}, function(resp) {
        $("#pelis").html(resp);
    });
}
function detallesProductos(id){
    $.get( '/index.php?action=detallProduct', {id : id}, function(resp) {
        $("#pelis").html(resp);
    });
}