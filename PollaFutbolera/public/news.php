<?php
$api_url = 'URL_DE_LA_API_DE_NOTICIAS';
$news = file_get_contents($api_url);
$news_data = json_decode($news, true);

foreach ($news_data as $news_item) {
    echo "<div><h2>{$news_item['title']}</h2><p>{$news_item['content']}</p></div>";
}
?>
