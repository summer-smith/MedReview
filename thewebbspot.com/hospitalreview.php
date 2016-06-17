<script type="text/javascript">
    $(':radio').change(
  function(){
    $('.choice').text( $(this).val() + ' stars' );
  } 
)

</script>

<html lang="en-us" class="homepage">
    <head>
        <meta charset="UTF-8">
        <!-- This Labels the Window/Tab -->
        <title>HOME | medreview</title>
        <meta name="author" content="Brandon Webb">
        <meta name="author" content="Summer Smith">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/cssstyles.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, iniHal-scale=1.0, maximum-scale=1.0">
    </head>

<span class="star-rating">
  <input type="radio" name="rating" value="1"><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
</span>
<strong class="choice">Choose a rating</strong>