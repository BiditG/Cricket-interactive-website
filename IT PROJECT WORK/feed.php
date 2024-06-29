<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Video Feed</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="upload.php">Upload</a></li>
                <li><a href="index2.html">Shop</a></li>
                <li><a href="index3.html">News</a></li>
                <li><a href="index4.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="Feed">
        <div class="feed-section">
            <h2>Video Feed</h2>
            <?php
            $directory = "uploads/";
            $videos = scandir($directory);

            foreach($videos as $video) {
                if ($video !== '.' && $video !== '..') {
                    echo '<div class="video-item">';
                    echo '<video width="320" height="240" controls>';
                    echo '<source src="' . $directory . $video . '" type="video/mp4">';
                    echo 'Your browser does not support the video tag.';
                    echo '</video>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>
</body>
</html>
