<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="recipes">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>BREAKFAST | thewebbspot.com</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>

        <div class="recipecontainer">
            <ul>
                <li>
                    <a href="http://allrecipes.com/recipes/151/breakfast-and-brunch/pancakes/">
                        <img src="/media/foods/pancakes.png" alt="pancakes" width="400" height="250">
                    </a>

                </li>

                <li>     
                    <a href="http://allrecipes.com/recipes/148/breakfast-and-brunch/eggs/">
                        <img src="/media/foods/grahamslam.png" alt="eggs" width="400" height="250">
                    </a>
                </li>
                <li>
                    <a href="http://allrecipes.com/search/results/?wt=cereal&amp;sort=re">
                        <img src="/media/foods/cereal.png" alt="cereal" width="400" height="250">
                    </a>
                </li>
                <li>
                    <a href="http://allrecipes.com/recipes/151/breakfast-and-brunch/pancakes/">
                        <img src="/media/foods/pancakes.png" alt="pancakes" width="400" height="250">
                    </a>
                </li>
            </ul>
        </div>


        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>     
        </footer>    
    </body>

</html>