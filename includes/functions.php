<?php

function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "2695"; // Cambia esto a tu contraseña real
    $dbname = "pollafutbolera"; // Cambia esto al nombre de tu base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}

function register_user($username, $password) {
    $conn = connect();

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "Nuevo usuario creado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}

function login_user($username, $password) {
    $conn = connect();

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Inicio de sesión exitoso";
        // Aquí puedes agregar código para manejar la sesión del usuario
    } else {
        echo "Nombre de usuario o contraseña incorrectos";
    }

    $stmt->close();
    $conn->close();
}
?>