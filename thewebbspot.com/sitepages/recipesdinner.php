<!DOCTYPE html>
<!--My Site Home Page-->
<html lang="en-us" class="recipes">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>DINNER | thewebbspot.com</title>
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
                    <a href="http://allrecipes.com/search/results/?wt=steaks&and;sort=re">
                        <img src="/media/foods/steak.png" alt="steak" width="400" height="250">
                    </a>
                </li>
                <li>
                    <a href="http://allrecipes.com/recipes/1219/world-cuisine/latin-american/mexican/main-dishes/tacos/">
                        <img src="/media/foods/tacos.png" alt="tacos" width="400" height="250">
                    </a>
                </li>
                <li>
                    <a href="http://allrecipes.com/recipes/201/meat-and-poultry/chicken/">
                        <img src="/media/foods/chicken.png" alt="chicken" width="400" height="250">
                    </a>
                </li>
                <li>
                    <a href="http://allrecipes.com/search/results/?wt=steaks&and;sort=re">
                        <img src="/media/foods/steak.png" alt="steak" width="400" height="250">
                    </a>
                </li>
            </ul>
        </div>


        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>     
        </footer>    
    </body>

</html>