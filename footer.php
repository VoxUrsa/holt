    <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Contact Us</p> 
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 disappear l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">  	  
            <iframe width="100%" height="450" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Mail Only</h3>
                  <p> 8611 Amestoy Ave.,<br>
                     Sherwood Forest, CA 91325
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>oholtlandscape@aol.com
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Phone</h3>
                  <p>818-886-2203</p>
                  <h3 class="margin-bottom-0">After December 1st Call Our Lot Phone</h3>
                  <p>818-993-7682</p>
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: #CCCC99;">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2020, Oliver Holt Sons and Daughters</p>
        </div>
        <div class="s-12 l-6">
          <a class="right text-size-12" href="http://voxursa.com" title="Developer of Greatness">Design by Vox Ursa</a>
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
    <script type="text/javascript" src="js/imgal.js"></script> 
         <script>

$('input[type="radio"]').click(function(){
  var setID = $(this).attr("data-setID");
	var radioID = $(this).attr("data-radioID");
  $("."+setID).not("."+radioID).hide();
  $("."+radioID).show();
  console.log(setID);
  console.log(radioID);

  if(radioID == 'emailRadio'){
  $(".physReq").prop('required',false);
  $(".req").prop('required',true);
  }

  if(radioID == 'physicalRadio'){
  $(".physReq").prop('required',true);
  }

});



         </script> 
         
  </body>
</html>