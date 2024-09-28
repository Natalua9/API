<?php
// Ваш API-ключ
$apiKey = "b8eb9a80346dc7f46f5a01aa21b6a094";

//  получения погоды по ID города
function getWeather($cityId) {
    global $apiKey;

    $url = "https://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&appid={$apiKey}&lang=ru";

    $response = file_get_contents($url);

    return $response;
}

// Получаем ID города из запроса
$cityId = $_GET['cityId'];

// Возвращаем данные о погоде
echo getWeather($cityId);
?>
