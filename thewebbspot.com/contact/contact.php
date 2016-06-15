<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="homepage">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>HOME | thewebbspot.com</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>


    <!-- *********************************BODY***************************** -->
    <body id="home">
        <nav>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </nav>
        <div>
            <main>
                <div>
                    <form method="post" action="." id="contactform">
                        <label for="name">Name:</label><br>
                        <input type="text" name="name" id="name" size="40"><br>
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" size="50"><br>
                        <label for="subject">Subject</label><br>
                        <input type="text" name="subject" id="subject" size="50"><br>
                        <label for="message">Message</label><br>
                        <textarea name="message" id="message" cols="50" rows="10"></textarea><br>
                        <label for='action'>&nbsp;</label>
                        <input type='submit' name="action" id='action' value="Send"><br>
                    </form>
                </div>

            <label>&nbsp;</label><img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)
            <!-- This allows the user to type in what they see -->
            <label for="cap_code">Security Code:</label><input id="cap_code" name="cap_code" type="text" size="6">

            
            </main>
        </div>
         
<!-- *********************************FOOTER***************************** -->

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>     
    </footer>  
    </body>
    
</html>
