<script type="text/javascript">
    $(':radio').change(
       function(){
         $('.choice').text( $(this).val() + ' stars' );
  } 
)

</script>

<html lang="en-us" class="calendars">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>HOME | medreview</title>
        <meta name="author" content="Brandon Webb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="../medreview/CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <?php include // $_SERVER['DOCUMENT_ROOT'].
        '/modules/header.php'; ?>

        <div class="flex-container">
            <?php include '/modules/sidebar.php'; ?>
           
            <div class="body">
                <h4>Doctor Review</h4>
     
                <h3>Rate your doctor:</h3>
                 <div class="stars">
                    <form action="">
                      <input class="star star-5" id="star-5" type="radio" name="star"/>
                      <label class="star star-5" for="star-5"></label>
                      <input class="star star-4" id="star-4" type="radio" name="star"/>
                      <label class="star star-4" for="star-4"></label>
                      <input class="star star-3" id="star-3" type="radio" name="star"/>
                      <label class="star star-3" for="star-3"></label>
                      <input class="star star-2" id="star-2" type="radio" name="star"/>
                      <label class="star star-2" for="star-2"></label>
                      <input class="star star-1" id="star-1" type="radio" name="star"/>
                      <label class="star star-1" for="star-1"></label>
                    </form>
                  </div>
                  
                <h3>Comments:</h3>
            <textarea name="comments" id="comments" rows="10" cols="30" 
                      onblur="" placeholder="">
            </textarea>
     
     </div>
        </div>
        
     <?php include  // $_SERVER['DOCUMENT_ROOT'].
        '/modules/footer.php'; ?>     
    
    </body>
    
</html>