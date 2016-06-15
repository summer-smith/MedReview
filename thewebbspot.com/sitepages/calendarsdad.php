<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="calendars">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>DAD'S CALENDAR | thewebbspot.com</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>

        <div class="headers">
            <h1>DAD'S CALENDAR</h1>
        </div>
        <div class="calendarcontainer">
            <iframe src="https://calendar.google.com/calendar/embed?src=brandonmwebb%40gmail.com&amp;ctz=America/Denver" style="border: 0" width="800" height="550" ></iframe>        </div>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>     
        </footer>  
    </body>
</html>


