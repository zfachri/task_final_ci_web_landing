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
    //var_dump($data);
    // Mendapatkan teks berita untuk awan kata (contoh mengambil judul berita)
    $news_text = '';
    foreach ($data['articles'] as $article) {
        $news_text .= $article['title'] . ' ';
        // var_dump($news_text);
    }

    // Simpan teks berita ke file teks
    file_put_contents('news_text.txt', $news_text);

    // Redirect ke halaman untuk menampilkan awan kata
    // header('Location: ./wordcloud.php');
    include 'wordcloud.php';
} else {
    echo 'Gagal mendapatkan data dari API News.';
}
