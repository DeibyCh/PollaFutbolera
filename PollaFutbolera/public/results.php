<?php
$api_url = 'URL_DE_LA_API_DE_RESULTADOS';
$results = file_get_contents($api_url);
$results_data = json_decode($results, true);

foreach ($results_data as $result) {
    echo "<div>{$result['home_team']} {$result['home_score']} - {$result['away_score']} {$result['away_team']}</div>";
}
?>
