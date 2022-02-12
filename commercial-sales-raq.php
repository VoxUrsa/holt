<?php include('header.php') ?>


<!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Commercial Quotes</h1>
           <!-- <p class="margin-bottom-0 text-size-16">Fill out the form and we'll get you a quote as fast as possible </p> -->
            <p class="margin-bottom-0 text-size-16">Our forms will be back up early November. Check back with us then!</p>
          </div>  
        </header>
        
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
                <div class="form-container" id="raq" style="margin-top:40px">
                <div id="banner-message">
    
    <h1> Request A Commercial Quote</h1>
    <div class="tal">
      <div class="pad-vert">
	  </div>
	  </div>
    <div class="tal">
      <div class="pad-vert">
      <a href="/services.php">Not a business? Click here for residential quotes!</a>  
      <br><br>
      </div>
      <!--
      <form method="post" name="myemailform" action="raqformsubmission.php">
    <fieldset class="fieldset">
    
    <label class="label" for="commercialRAQ-delivery-date">Requested Delivery Date: (May require 24 hours for processing and delivery)</label>
    <input type="text" id="datepicker" name="commercialRAQ-delivery-date">
    
    <label class="label" for="commercialRAQ-company-name">Company Name</label>
      <input class="input req physReq" id="commercialRAQ-company-name" name="commercialRAQ-company-name" type="text" required>
  
      <label class="label" for="commercialRAQ-contact-name">Contact Name</label>
      <input class="input req physReq" id="commercialRAQ-contact-name" name="commercialRAQ-contact-name" type="text" required>

      <label class="label" for="commercialRAQ-phone">Phone Number</label>
      <input class="input req physReq" id="commercialRAQ-phone" name="commercialRAQ-phone" type="text" required>

      <label class="label" for="commercialRAQ-mailing-address-1">Billing Address 1</label>
      <input class="input  physReq" id="commercialRAQ-mailing-address-1" name="commercialRAQ-mailing-address-1" type="text" required>
  
      <label class="label" for="commercialRAQ-mailing-address-2">Billing Address 2 <span class="hint">(optional)</span></label>
      <input class="input" id="commercialRAQ-mailing-address-2" name="commercialRAQ-mailing-address-2" type="text">
  
      <div class="grid-row grid-gap">
        <div class="mobile-lg:grid-col-8">
          <label class="label" for="commercialRAQ-mailing-city">City</label>
          <input class="input  physReq" id="commercialRAQ-mailing-city" name="commercialRAQ-mailing-city" type="text" required>
        </div>
        <div class="mobile-lg:grid-col-4">
          <label class="label" for="commercialRAQ-mailing-state">State</label>
          <select class="select physReq" id="commercialRAQ-mailing-state" name="commercialRAQ-mailing-state" required>
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
  
      <label class="label" for="commercialRAQ-mailing-zip">ZIP</label>
      <input class="input input--medium  physReq" id="commercialRAQ-mailing-zip" name="commercialRAQ-mailing-zip" type="text" pattern="[\d]{5}(-[\d]{4})?" required>

      <label class="label" for="commercialRAQ-delivery-address-1">Delivery Address 1</label>
      <input class="input  physReq" id="commercialRAQ-delivery-address-1" name="commercialRAQ-delivery-address-1" type="text" required>
  
      <label class="label" for="commercialRAQ-delivery-address-2">Delivery Address 2 <span class="hint">(optional)</span></label>
      <input class="input" id="commercialRAQ-delivery-address-2" name="commercialRAQ-delivery-address-2" type="text">
  
      <div class="grid-row grid-gap">
        <div class="mobile-lg:grid-col-8">
          <label class="label" for="commercialRAQ-delivery-city">City</label>
          <input class="input  physReq" id="commercialRAQ-delivery-city" name="commercialRAQ-delivery-city" type="text" required>
        </div>
        <div class="mobile-lg:grid-col-4">
          <label class="label" for="commercialRAQ-delivery-state">State</label>
          <select class="select physReq" id="commercialRAQ-delivery-state" name="commercialRAQ-delivery-state" required>
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
  
      <label class="label" for="commercialRAQ-delivery-zip">ZIP</label>
      <input class="input input--medium  physReq" id="commercialRAQ-delivery-zip" name="commercialRAQ-delivery-zip" type="text" pattern="[\d]{5}(-[\d]{4})?" required>

      <label class="label" for="commercialRAQ-email">Email</label>
      <input class="input req physReq" id="commercialRAQ-email" name="commercialRAQ-email" type="email" required>

      <label class="label" for="commercialRAQ-tree">Tree</label>
      <select name="commercialRAQ-tree">
        <option value="Noble Fir">Noble</option>
        <option value="Douglas Fir">Douglas Fir</option>
        <option value="Silver Tip">Silver Tip</option>
        <option value="Grand Fir">Grand Fir</option>
        <option value="Other">Other</option>
      </select>


      <label class="label" for="commercialRAQ-height">Height (In Feet)</label>
      <input type="number" id="commercialRAQ-height" name="commercialRAQ-height" value="">

      <label class="label" for="commercialRAQ-standreq">Stand and Water Bowl Required?</label>
      <input type="radio" name="commercialRAQ-standreq"  value="Yes" checked="checked">Yes
      <input type="radio" name="commercialRAQ-standreq"  value="No">No

      <label class="label" for="commercialRAQ-coat" id="modalclicker">Flocking (White Only)/Fireproofing (What is this?)</label>
      <select name="commercialRAQ-coat">
        <option value="Fire Retardant">Fire Retardant</option>
        <option value="Light Flocking">Light Flocking</option>
        <option value="Regular Flocking">Regular Flocking</option>
        <option value="Heavy Flocking">Heavy Flocking</option>
        <option value="Light Tip Flocking">Tip Flocking (Light)</option>
        <option value="Regular Tip Flocking">Tip Flocking (Regular)</option>
        <option value="Heavy Tip Flocking">Tip Flocking (Heavy)</option>
      </select>

     <label class="label" for="commercialRAQ-products">Additional Products:</label>
     <input type="checkbox" name="commercialRAQ-product1" value="Yes">Keeps-It-Green (Preservative)<br>
     <input type="checkbox" name="commercialRAQ-product2" value="Yes">Tree Bag<br>
     <input type="checkbox" name="commercialRAQ-product3" value="Yes">Tree Netting<br>

     <label class="label" for="commercialRAQ-wreath">Wreath:</label>
      <select name="commercialRAQ-wreath">
        <option value="none">None</option>
        <option value="24 inch undecorated">24" Undecorated (w/ red bow)</option>
        <option value="34 inch undecorated">34" Undecorated (w/ red bow)</option>
        <option value="24 inch decorated">24" Decorated</option>
        <option value="34 inch decorated">34" Decorated</option>
      </select>     

      <label class="label" for="commercialRAQ-garland">Garland (sold by the foot)</label>
      <input type="number" id="commercialRAQ-garland" name="commercialRAQ-garland" value="">

      <label class="label" for="commercialRAQ-poinsettias">Poinsettias</label>
      <input type="number" id="commercialRAQ-redpoinsettias" name="commercialRAQ-redpoinsettias" style="width:50px;" value="">Red
      <input type="number" id="commercialRAQ-whitepoinsettias" name="commercialRAQ-whitepoinsettias" style="width:50px;" value="">White

      <label class="label" for="commercialRAQ-notes">Special Instructions/Notes/Additional Trees</label>
      <textarea name="commercialRAQ-notes" rows="10" cols="30"></textarea>
      <input type="submit" name='submit' value="submit">

    </fieldset>
  </form> 
-->
  <div id="myModal" class="modal"> 

   Modal content 
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>According to Los Angeles City Fire Code 806.1.4.2 Flame-retardant. "Cut natural trees shall be flame-retardant treated in accordance
with Title 19, C.C.R., and a State Fire Marshal Certificate of Flame Resistance Tag shall be
attached near the base." </p>
<p> This means that we are required to verify that any tree that we deliver to a business must be fireproofed.</p><br>
<p>Flocking a tree fulfills the Fire Code for applying fireproofing to a christmas tree so only one or the other is required</p>
  </div>

</div>  
    </div>
  </div>                
</div>                 
                

            </div>  
          </div>
        </div> 
      </article>
    </main>
    
<?php include('footer.php') ?>