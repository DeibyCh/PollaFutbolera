<nav>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="predictions.php">Predicciones</a></li>
        <li><a href="results.php">Resultados</a></li>
        <li><a href="news.php">Noticias</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="profile.php">Perfil</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        <?php else: ?>
            <li><a href="register.php">Registrarse</a></li>
            <li><a href="login.php">Iniciar sesión</a></li>
        <?php endif; ?>
    </ul>
</nav>
