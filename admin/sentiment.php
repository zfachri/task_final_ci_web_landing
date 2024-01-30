<?php
include "../include/header.php";
// API News URL
$api_url = 'https://newsapi.org/v2/top-headlines?country=id&category=technology&apiKey=e1c7f6efec974dddb22076143d05bfe8';

// Mendapatkan data dari API News
$response = file_get_contents($api_url);

// Jika mendapatkan data, lanjutkan
if ($response !== false) {
    // Konversi respons JSON ke bentuk array
    $data = json_decode($response, true);
    // var_dump($data);
    // Mendapatkan teks berita untuk analisis sentimen (contoh mengambil judul berita)
    $news_text = '';
    foreach ($data['articles'] as $article) {
        $news_text .= $article['title'] . ' ';
        // var_dump($news_text);
    }

    // Simpan teks berita ke file teks
    file_put_contents('news_text.txt', $news_text);

    // Panggil skrip Python untuk analisis sentiment
    $command="python sentiment_calculation.py";
    // $command = "/usr/local/bin/python3.10 sentiment_calculation.py";
    // $command="/usr/local/bin/python3.10 -V 2>&1";
    // $command = "php -v";
    // exec($command, $output);
    $output = shell_exec($command);

    // Output hasil analisis sentimen dari skrip Python
    echo '<pre>';
    print_r($output);
    echo '</pre>';


    // Output hasil analisis sentimen dari skrip Python
    echo '<script>';
    echo 'alert("Sentiment Analysis Result: ' . $output[0] . '");';
    echo '</script>';
} else {
    echo 'Gagal mendapatkan data dari API News.';
}
