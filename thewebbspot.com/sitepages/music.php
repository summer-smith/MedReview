<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="music">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>MUSIC | thewebbspot.com</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>

        <div class="headers">
            <h1 class="mainheaders">MUSIC</h1>
        </div>
        
        <div class="pagenav">
            <ul class="pagenavlist">
            <li><a href="/sitepages/musicartist.php">ARTISTS</a></li>
            <li><a href="/sitepages/musicgenre.php">GENRES</a></li>
            <li><a href="/sitepages/musicsong.php">SONGS</a></li>
            </ul>
        </div>
        
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>     
        </footer>
    </body>
</html>