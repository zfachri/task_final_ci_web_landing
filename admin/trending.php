<?php
include "../include/header.php";
$xml = simplexml_load_file("https://news.google.com/rss/search?q=indonesia&hl=id&gl=ID&ceid=ID:id");
$arrayG = json_decode(json_encode((array)$xml), TRUE);
?>

<?php
$title = 'Trending';

?>

<div class="card" style="width: auto;">
    <ul class="news">
        <?php
        $i = 0;
        foreach ($arrayG["channel"]["item"] as $value) :
            if (++$i == 10) break;

            // Periksa apakah ada elemen media:content atau enclosure untuk gambar
            $image_url = '';

            // Periksa media:content
            if (!empty($value["media:content"]["url"])) {
                $image_url = $value["media:content"]["url"];
            }
            // Jika tidak ada, periksa enclosure
            elseif (!empty($value["enclosure"]["url"])) {
                $image_url = $value["enclosure"]["url"];
            }
        ?>
            <li>
                <a href="<?= $value["link"]; ?>" style="text-decoration: none">
                    <div>
                        <div class="news-source">
                            <b><?= $value["title"]; ?></b>
                        </div>
                        <?php if (!empty($image_url)) : ?>
                            <img src="<?= $image_url; ?>" alt="Berita Image" style="max-width: 100%; height: auto;">
                        <?php endif; ?>
                        <p><?= $value["description"]; ?></p>
                        <p class="news-date"><?= date('h:i d-m-Y', strtotime($value["pubDate"])); ?></p>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php

?>