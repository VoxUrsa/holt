<?php include('header.php') ?>

<!-- MAIN -->
<main role="main">
<!-- Content -->
<article>
<header class="section background-dark">
  <div class="line">
    <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Residential Quotes</h1>
<!--    <p class="margin-bottom-0 text-size-16">Fill out the form and we'll get you a quote as fast as possible. Update: Please be aware that we are running low on stock in certain sizes.
</p> -->
<p class="margin-bottom-0 text-size-16">Our forms will be back up early November. Check back with us then!
</p>

  </div>
</header>
<div class="section background-white">
<div class="line">
  <!--
<div class="margin">
  <div class="form-container" style="margin-top:50px;">
    <div id="banner-message">
      <h1> Request A Residential Quote</h1>
    <div class="tal">
      <div class="pad-vert">
	  </div>
	  </div>

      <div class="tal">
        <div class="pad-vert"> <a href="/commercial-sales.php#raq">Need a quote for a business? Click here for commercial quotes!</a> <br>
          <br>
        </div>
        <form method="post" name="myemailform" action="residentialraqformsubmission.php">
          <fieldset class="fieldset">
                          <label class="label" for="residentialRAQ-types">Quote Type:</label>
            <div>
  <input type="radio" id="type1" name="quotetype" value="PickUp"
         checked>
  <label for="pickup">Pick-up</label>
</div>

<div>
  <input type="radio" id="type2" name="quotetype" value="Delivery">
  <label for="delivery">Delivery</label>
</div>

<div>
  <input type="radio" id="type3" name="quotetype" value="PrePay">
  <label for="prepay">Pre-Pay</label>
</div>   

            <label class="label" for="residentialRAQ-delivery-date">Requested Date: (May require 24 hours for processing and delivery)</label>
            <input type="text" id="datepicker" name="residentialRAQ-delivery-date">
            <label class="label" for="residentialRAQ-company-name">First Name</label>
            <input class="input req physReq" id="residentialRAQ-company-name" name="residentialRAQ-company-name" type="text" required>
            <label class="label" for="residentialRAQ-contact-name">Last Name</label>
            <input class="input req physReq" id="residentialRAQ-contact-name" name="residentialRAQ-contact-name" type="text" required>
            <label class="label" for="residentialRAQ-phone">Phone Number</label>
            <input class="input req physReq" id="residentialRAQ-phone" name="residentialRAQ-phone" type="text" required>
            <label class="label" for="residentialRAQ-delivery-address-1">Street Address 1</label>
            <input class="input  physReq" id="residentialRAQ-delivery-address-1" name="residentialRAQ-delivery-address-1" type="text" required>
            <label class="label" for="residentialRAQ-delivery-address-2">Street Address 2 <span class="hint">(optional)</span></label>
            <input class="input" id="residentialRAQ-delivery-address-2" name="residentialRAQ-delivery-address-2" type="text">
            <div class="grid-row grid-gap">
              <div class="mobile-lg:grid-col-8">
                <label class="label" for="residentialRAQ-delivery-city">City</label>
                <input class="input  physReq" id="residentialRAQ-delivery-city" name="residentialRAQ-delivery-city" type="text" required>
              </div>
              <div class="mobile-lg:grid-col-4">
                <label class="label" for="residentialRAQ-delivery-state">State</label>
                <select class="select physReq" id="residentialRAQ-delivery-state" name="residentialRAQ-delivery-state" required>
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
            <label class="label" for="residentialRAQ-delivery-zip">ZIP</label>
            <input class="input input--medium  physReq" id="residentialRAQ-delivery-zip" name="residentialRAQ-delivery-zip" type="text" pattern="[\d]{5}(-[\d]{4})?" required>
            <label class="label" for="residentialRAQ-email">Email</label>
            <input class="input req physReq" id="residentialRAQ-email" name="residentialRAQ-email" type="email" required>
            <label class="label" for="residentialRAQ-tree">Tree</label>
            <select name="residentialRAQ-tree">
              <option value="Noble Fir">Noble</option>
              <option value="Douglas Fir">Douglas Fir</option>
              <option value="Silver Tip">Silver Tip</option>
              <option value="Grand Fir">Grand Fir</option>
              <option value="Other">Other</option>
            </select>
            <label class="label" for="residentialRAQ-height">Height (In Feet)</label>
            <input type="number" id="residentialRAQ-height" name="residentialRAQ-height" value="">
            <label class="label" for="residentialRAQ-standreq">Stand and Water Bowl Required?</label>
            <select name="residentialRAQ-standreq">
              <option value="None">None</option>
              <option value="Wood Only">Wood Only</option>
              <option value="Wood And Waterbowl">Wood with Waterbowl</option>
              <option value="Metal">Metal (Rebar) with Waterbowl</option>
            </select>
            <label class="label" for="residentialRAQ-coat" id="modalclicker">Flocking (White Only)/Fireproofing</label>
            <select name="residentialRAQ-coat">
              <option value="None">None</option>
              <option value="Fire Retardant">Fire Retardant</option>
              <option value="Light Flocking">Light Flocking</option>
              <option value="Regular Flocking">Regular Flocking</option>
              <option value="Heavy Flocking">Heavy Flocking</option>
              <option value="Light Tip Flocking">Tip Flocking (Light)</option>
              <option value="Regular Tip Flocking">Tip Flocking (Regular)</option>
              <option value="Heavy Tip Flocking">Tip Flocking (Heavy)</option>
            </select>
            <label class="label" for="residentialRAQ-products">Additional Products:</label>
            <input type="checkbox" name="residentialRAQ-product1" value="Yes">
            Keeps-It-Green (Preservative)<br>
            <input type="checkbox" name="residentialRAQ-product2" value="Yes">
            Tree Bag<br>
            <input type="checkbox" name="residentialRAQ-product3" value="Yes">
            Tree Netting<br>
            <label class="label" for="residentialRAQ-wreath">Wreath:</label>
            <select name="residentialRAQ-wreath">
              <option value="none">None</option>
              <option value="24 inch undecorated">24" Undecorated (w/ red bow)</option>
              <option value="34 inch undecorated">34" Undecorated (w/ red bow)</option>
              <option value="24 inch decorated">24" Decorated</option>
              <option value="34 inch decorated">34" Decorated</option>
            </select>
            <label class="label" for="residentialRAQ-garland">Garland (sold by the foot)</label>
            <input type="number" id="residentialRAQ-garland" name="residentialRAQ-garland" value="">
            <label class="label" for="residentialRAQ-poinsettias">Poinsettias</label>
            <input type="number" id="residentialRAQ-redpoinsettias" name="residentialRAQ-redpoinsettias" style="width:50px;" value="">
            Red
            <input type="number" id="residentialRAQ-whitepoinsettias" name="residentialRAQ-whitepoinsettias" style="width:50px;" value="">
            White
            <label class="label" for="residentialRAQ-notes">Special Instructions/Notes</label>
            <textarea name="residentialRAQ-notes" rows="10" cols="30"></textarea>
            <input type="submit" name='submit' value="submit">
          </fieldset>
        </form>
      </div> -->
    </div>
  </div>
</div>
</article>
</main>
<?php include('footer.php') ?>