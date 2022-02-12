<?php include('header.php') ?>


<!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Residential Mailing List</h1>
            <p class="margin-bottom-0 text-size-16">Get location updates and a coupon! 
          </div>  
        </header>
        
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
<div class="form-container">
<div id="banner-message">
    
  <h1> Sign up for our mailing list!</h1>
  
  <div class="tal">
    <div class="pad-vert">
    <a href="/commercial-sales-mailing.php">Are you a business? Click here to signup for our Commercial Sales mailing list!</a>  
    <br><br>
    <form method="post" name="myemailform" action="signupformsubmit.php">
    <fieldset class="fieldset">
      <label class="label" for="contact-preference">
    I would prefer my corresepondence by: </label>
      <input type="radio" name="contact-preference" data-setID="preferenceTypeSet" data-radioID="emailRadio" value="Email" checked="checked">Email
      <input type="radio" name="contact-preference" data-setID="preferenceTypeSet" data-radioID="physicalRadio" value="Physical">Mail
    </div>
  
    <label class="label" for="firstName">First Name</label>
    <input class="input req physReq" id="firstName" name="firstName" type="text" required>

    <label class="label" for="lastName">Last Name</label>
    <input class="input req physReq" id="lastName" name="lastName" type="text" required>

    <label class="label" for="email">Email</label>
    <input class="input req physReq" id="email" name="email" type="email" onBlur="checkAvailability()" required>
    <p><img src="/images/loading.gif" id="loaderIcon" style="display:none" /></p>

    <label class="label" for="mailing-address-1">Street address 1</label>
    <input class="input  physReq" id="mailing-address-1" name="mailing-address-1" type="text">

    <label class="label" for="mailing-address-2">Street address 2 <span class="hint">(optional)</span></label>
    <input class="input" id="mailing-address-2" name="mailing-address-2" type="text">

    <div class="grid-row grid-gap">
      <div class="mobile-lg:grid-col-8">
        <label class="label" for="city">City</label>
        <input class="input  physReq" id="city" name="city" type="text">
      </div>
      <div class="mobile-lg:grid-col-4">
        <label class="label" for="state">State</label>
        <select class="select physReq" id="state" name="state" >
          <option value>- Select -</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
          <option value="AA">AA - Armed Forces Americas</option>
          <option value="AE">AE - Armed Forces Africa</option>
          <option value="AE">AE - Armed Forces Canada</option>
          <option value="AE">AE - Armed Forces Europe</option>
          <option value="AE">AE - Armed Forces Middle East</option>
          <option value="AP">AP - Armed Forces Pacific</option>
        </select>
      </div>
    </div>

    <label class="label" for="zip">ZIP</label>
    <input class="input input--medium  physReq" id="zip" name="zip" type="text" pattern="[\d]{5}(-[\d]{4})?">

    <input type="submit" name='submit' value="submit">

  </fieldset>
</form>

  </div>
</div>
</div>
                
                

            </div>  
          </div>
        </div> 
      </article>
    </main>
    

<script>
function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
    url: "emailvalidation.php",
    data:'email='+$("#email").val(),
    type: "POST",
    success:function(data){
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
        $('#submit').prop('disabled', true);
    },
    error:function (data){$('#submit').prop('disabled', true);}
    });
}
</script>

<?php include('footer.php') ?>