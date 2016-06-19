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


        <form method="post" action="" id="contactForm" onreset="loadPage()
                    onsubmit="return validateForm();">
            <table>
                <tr>
                    <td>First name:</td>
                    <td><input type="text" id="fName" onblur="validateFName()"></td>
                <td class="error" id="fNameValid">First name required</td>
                </tr>
                <tr>
                    <td>Last name:</td>
                    <td><input type="text" id="lName" onblur="validateLName()"></td>
                    <td class="error" id="lNameValid">
                    Last name required</td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td><input type="text" id="address" onblur="validateAddress()"></td>
                    <td class="error" id="addValid">Address required</td>
                </tr>
                <tr>
                    <td>Zip:</td>
                    <td><input type="text" id="zip" maxlength="5" size="5" onblur="validateZip()"></td>
                    <td class="error" id="zipValid">Zip code required</td>    
                </tr>   
                <tr>
                    <td>Phone:</td>
                    <td>(<input type="text" id="phone1" maxlength="3" size="3">)
                        <input type="text" id="phone2" maxlength="3" size="3">
                    - <input type="text" id="phone3" maxlength="4" size="4" onblur="validatePhone()">
                    </td>
                    <td class="error" id="phoneValid">Full phone number required<br />(000)000-0000</td>
                </tr>
                
                <tr>
                    <td>Message:</td>
                    <td class="error" id="noMsg">Message cannot be blank!</td>
                </tr>
            </table>
                    
            <textarea name="message" id="message" rows="10" cols="30" 
                      onblur="validateMessage()" placeholder="Type message here">
            </textarea>
                                        
            <div style="text-align:center">
                <input type="submit" value="Send" onclick="return validateForm()"/>
                <input type="reset" value="Cancel" />
                
          </div>
        </form>
   
</html>