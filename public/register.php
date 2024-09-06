<?php
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (register_user($username, $password)) {
        echo 'Registro exitoso';
    } else {
        echo 'Error en el registro';
    }
}
?>
<form method="post">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Registrarse</button>
</form>
