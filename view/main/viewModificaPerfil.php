<?php
require __DIR__ . '/../../controllers/controllerHeader.php';
?>
<h1>Modifica el teu perfil</h1>

<form method="post" enctype="multipart/form-data">
    <div>
        <label for="email"> Email</label>
        <input  id="email", name="email", type="email">
    </div>
    <div>
        <label for="username"> Username</label>
        <input  id="username", name="username", type="text" required>
    </div>
    <div>
        <label for="password"> Password</label>
        <input  id="password", name="password", type="password">
    </div>
    <div>
        <label for="poblacio"> Población</label>
        <input  id="poblacio", name="poblacio", type="text">
    </div>
    <div>
        <label for="codip"> Codigo Postal</label>
        <input  id="codip", name="codip", type="text">
    </div>
    <div>
        <label for="image"> Imatge de Perfil</label>
        <input  id="image", name="image", type="file">
    </div>
    <input class="submit" align="center" type="submit" value="Modifica" name="Modifica">

</form>
