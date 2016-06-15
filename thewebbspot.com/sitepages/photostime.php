<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="photos">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>TIME | thewebbspot.com</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>

        <script type="text/javascript">
            function redirectMe(sel) {
                var url = sel[sel.selectedIndex].value;
                window.location = url;
            }
        </script>

        <div class="phototimecontainer">
            <select class="photoitem">
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
            </select>
        </div>
        <div class="phototimecontainer">
            <div class="photoitem">
                <p><a href="/sitepages/comingsoon.php">JANUARY</a></p>
                <p><a href="/sitepages/comingsoon.php">FEBRUARY</a></p>
                <p><a href="/sitepages/comingsoon.php">MARCH</a></p>
                <p><a href="/sitepages/comingsoon.php">APRIL</a></p>
            </div>
            <div class="photoitem">
                <p><a href="/sitepages/comingsoon.php">MAY</a></p>
                <p><a href="/sitepages/comingsoon.php">JUNE</a></p>
                <p><a href="/sitepages/comingsoon.php">JULY</a></p>
                <p><a href="/sitepages/comingsoon.php">AUGUST</a></p>
            </div>
            <div class="photoitem">
                <p><a href="/sitepages/comingsoon.php">SEPTEMBER</a></p>
                <p><a href="/sitepages/comingsoon.php">OCTOBER</a></p>
                <p><a href="/sitepages/comingsoon.php">NOVEMBER</a></p>
                <p><a href="/sitepages/comingsoon.php">DECEMBER</a></p>
            </div>
        </div>



        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>     
        </footer>   
    </body>

</html>