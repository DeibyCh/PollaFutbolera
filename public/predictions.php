<?php
session_start();
require_once '../includes/functions.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $match_id = $_POST['match_id'];
    $predicted_score_home = $_POST['predicted_score_home'];
    $predicted_score_away = $_POST['predicted_score_away'];
    // Guardar la predicción en la base de datos...
}

$matches = "get_upcoming_matches()"; // Función que recupera los próximos partidos
?>
<form method="post">
    <label for="match">Partido:</label>
    <select id="match" name="match_id">
        <?php foreach ($matches as $match): ?>
            <option value="<?= $match['id'] ?>"><?= $match['home_team'] ?> vs <?= $match['away_team'] ?></option>
        <?php endforeach; ?>
    </select>
    <label for="predicted_score_home">Goles equipo local:</label>
    <input type="number" id="predicted_score_home" name="predicted_score_home" required>
    <label for="predicted_score_away">Goles equipo visitante:</label>
    <input type="number" id="predicted_score_away" name="predicted_score_away" required>
    <button type="submit">Enviar predicción</button>
</form>
