<?php
include '../includes/functions.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    login_user($username, $password);
}
?>

<form method="post" action="">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Iniciar sesión">
</form>
