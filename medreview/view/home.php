<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="calendars">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>HOME | medreview</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="../medreview/CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
    </head>
    <?php include // $_SERVER['DOCUMENT_ROOT'].
    '/modules/header.php'; ?>
    <body>
        <div class="main">        
        <?php include '/modules/sidebar.php'; ?>

            <div class="maincontent">
                
                <img width=130% src="images/doctors.jpg" alt="Welcome to medreview!"/>
            </div>
        
 
        </div>
    </body>
     <?php include  // $_SERVER['DOCUMENT_ROOT'].
        '/modules/footer.php'; ?>        
</html>