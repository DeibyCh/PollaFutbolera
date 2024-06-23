<?php
function register_user($username, $password) {
    $conn = connect();
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->bind_param('ss', $username, $password_hashed);
    return $stmt->execute();
}

function login_user($username, $password) {
    $conn = connect();
    $stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);

    if ($stmt->num_rows > 0 && $stmt->fetch() && password_verify($password, $hashed_password)) {
        return $id;
    } else {
        return false;
    }
}

// Otros métodos para las predicciones, cálculos de puntuación, etc.
?>
