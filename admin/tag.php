<?php
include "../include/header.php";
// API News URL
$api_url = 'https://newsapi.org/v2/top-headlines?country=id&category=technology&apiKey=bc7820fe7ae943b39399c643f778f191';

// Mendapatkan data dari API News
try{
    sleep(3);
$response = file_get_contents($api_url);

// Jika mendapatkan data, lanjutkan
if ($response !== false) {
    // Konversi respons JSON ke bentuk array
    $data = json_decode($response, true);
        if($data['status'] == 'error') {
        echo $data['message'];
        exit;
    }
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

} catch(Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
