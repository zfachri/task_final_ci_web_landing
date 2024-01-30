<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Cloud</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wordcloud2.js/1.0.6/wordcloud2.min.js"></script>
</head>

<body>
    <canvas id="wordcloud"></canvas>

    <script>
    let wordcloud = document.getElementById('wordcloud');
    <?php
        $news_text = file_get_contents('./news_text.txt');
        $words = [];
        $news_text = explode(' ', $news_text);
        foreach ($news_text as $key => $value) {
            if ($value == "") continue;
            array_push($words, array($value, rand(5, 12)));
        }
        ?>
    // Tampilkan awan kata
    var options = {
        list: <?php echo json_encode($words) ?>,
        gridSize: 10,
        weightFactor: 5,
        fontFamily: 'Arial',
        color: 'random-dark',
        backgroundColor: '#fff',
        rotateRatio: 0.5,
        minSize: 20,
        shape: 'square',
        click: function(item) {
            console.log(item);
        },

    };
    wordcloud.width = 800;
    wordcloud.height = 400;
    WordCloud(wordcloud, options);
    </script>
</body>

</html>