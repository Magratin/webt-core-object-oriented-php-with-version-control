<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embedded YouTube Videos</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

<?php
    require_once 'video.php';
    $youtubevideos = [
        new youtubevideo("https://www.youtube.com/embed/tgbNymZ7vqY","Bohemian Rhapsody","Youtube"),
        new youtubevideo("https://www.youtube.com/embed/tgbNymZ7vqY","Bohemian Rhapsody","Youtube"),
        new youtubevideo("https://www.youtube.com/embed/tgbNymZ7vqY","Bohemian Rhapsody","Youtube"),
        new youtubevideo("https://www.youtube.com/embed/tgbNymZ7vqY","Bohemian Rhapsody","Youtube"),
        new youtubevideo("https://www.youtube.com/embed/tgbNymZ7vqY","Bohemian Rhapsody","Youtube")
    ];

    echo "<p>5 Youtube Videos</p>";
    foreach($youtubevideos as $youtubevideo) {
        echo $youtubevideo->implementiframe();
    }
    
    
    ?>

    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>
    <figure>
        <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY" title="Bohemian Rhapsody"></iframe>
        <figcaption>Youtube</figcaption>
    </figure>  
</body>
</html>
