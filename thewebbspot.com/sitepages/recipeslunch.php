<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="recipes">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>LUNCH | thewebbspot.com</title>
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
                    <a href="http://allrecipes.com/search/results/?wt=salads&amp;sort=re">
                        <img src="/media/foods/salad.png" alt="salads" width="400" height="250">
                    </a>
                </li>
                <li>
                    <a href="http://allrecipes.com/recipes/505/main-dish/pasta/spaghetti/">
                        <img src="/media/foods/spaghetti.png" alt="spaghetti" width="400" height="250">
                    </a>
                </li>
                <li>   
                    <a href="http://allrecipes.com/recipes/251/main-dish/sandwiches/">
                        <img src="/media/foods/sandwich.png" alt="sandwich" width="400" height="250">
                    </a>
                </li>
                <li>
                    <a href="http://allrecipes.com/search/results/?wt=salads&amp;sort=re">
                        <img src="/media/foods/salad.png" alt="salads" width="400" height="250">
                    </a>
                </li>
            </ul>
        </div>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>     
        </footer>    
    </body>

</html>