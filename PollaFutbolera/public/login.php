<?php
require_once '../includes/functions.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_id = login_user($username, $password);

    if ($user_id) {
        $_SESSION['user_id'] = $user_id;
        header('Location: profile.php');
    } else {
        echo 'Usuario o contraseña incorrectos';
    }
}
?>
<form method="post">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Iniciar sesión</button>
</form>
