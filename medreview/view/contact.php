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