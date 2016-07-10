<!DOCTYPE html>
<html lang="en-us" class="calendars">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>DOCTORS | account</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../medreview/CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>
    <?php include // $_SERVER['DOCUMENT_ROOT'].
    '/modules/header.php'; ?>
    <body>
        <div class="main">
            <?php include '/modules/sidebar.php'; ?>

            <div class="maincontent">
            <h2>Doctors</h2>
                <form action="." method="post">
                    <button type="submit" class="menu" name="action" value="doctorreview">Review</button><br><br>
                    <button type="submit" class="menu" name="action" value="searchdoctors">Search</button>        
                </form>
            </div>
        </div>

    </body>
        
     <?php include  // $_SERVER['DOCUMENT_ROOT'].
        '/modules/footer.php'; ?>     
        
</html>