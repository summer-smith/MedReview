<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="videos">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>OCCASIONS | thewebbspot.com</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>

        <div class="videoscontainer">   
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/boating.mov" type="video/mp4" class="vid">
                Your browser does not support the video tag.
            </video>
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/birthday.mov" type="video/mp4" class="vid">
                Your browser does not support the video tag.
            </video>
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/aquarium.mov" type="video/mp4" class="vid">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="viddeets">
            <p>Boating</p>
            <p>Birthday</p>
            <p>Aquarium</p>
        </div>
        <div class="videoscontainer">
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/disneyland.mov" type="video/mp4" class="vid">
                Your browser does not support the video tag.
            </video>
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/disneylandnight.mov" type="video/mp4" class="vid">
                Your browser does not support the video tag.
            </video>
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/southcarolina.mov" type="video/mp4" class="vid">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="viddeets">
            <p>Disneyland1</p>
            <p>Disneyland2</p>
            <p>Carolina</p>
        </div>
        <div class="videoscontainer">
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/addie.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/jojo.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video width="320" height="240" controls class="vid">
                <source src="/media/videos/addie1.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="viddeets">
            <p>Granny</p>
            <p>Jojo Kitchen</p>
            <p>Crawling</p>
        </div>







        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>     
        </footer>    
    </body>

</html>