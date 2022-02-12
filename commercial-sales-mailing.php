<?php include('header.php') ?>


<!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Commercial Mailing List</h1>
            <p class="margin-bottom-0 text-size-16">Get an updated price list and order information!
          </div>  
        </header>
        
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
<div class="form-container" style="margin-top:50px">
   <div id="banner-message">
    
    <h1> Sign up for our commercial mailing list!</h1>

    <div class="tal">
      <div class="pad-vert">
      <a href="/coupon.php">Not a business? Click here to signup for our residential mailing list!</a>  
      <br><br>
      </div>
    <form method="post" name="cml_form" action="corporatemailinglistformsubmission.php">
    <fieldset class="fieldset">

    <label class="label" for="cml_contact_preference"> I would prefer my corresepondence by: </label>
        <input type="radio" name="cml_contact_preference" value="Email" checked>Email
        <input type="radio" name="cml_contact_preference" value="Physical">Mail


      <label class="label" for="cml_company_name">Company Name</label>
      <input class="input req physReq" id="cml_company_name" name="cml_company_name" type="text" required>
  
      <label class="label" for="cml_contact_name">Contact Name</label>
      <input class="input req physReq" id="cml_contact_name" name="cml_contact_name" type="text" required>
  
      <label class="label" for="cml_email">Email</label>
      <input class="input req physReq" id="cml_email" name="cml_email" type="email" required>
  
      <label class="label" for="cml_mailing-address-1">Street address 1</label>
      <input class="input  physReq" id="cml_mailing-address-1" name="cml_mailing-address-1" type="text" required>
  
      <label class="label" for="cml_mailing-address-2">Street address 2 <span class="hint">(optional)</span></label>
      <input class="input" id="cml_mailing-address-2" name="cml_mailing-address-2" type="text">
  
      <div class="grid-row grid-gap">
        <div class="mobile-lg:grid-col-8">
          <label class="label" for="cml_city">City</label>
          <input class="input  physReq" id="cml_city" name="cml_city" type="text" required>
        </div>
        <div class="mobile-lg:grid-col-4">
          <label class="label" for="cml_state">State</label>
          <select class="select physReq" id="cml_state" name="cml_state" required>
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
  
      <label class="label" for="cml_zip">ZIP</label>
      <input class="input input--medium  physReq" id="cml_zip" name="cml_zip" type="text" pattern="[\d]{5}(-[\d]{4})?" required>

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
    
<?php include('footer.php') ?>