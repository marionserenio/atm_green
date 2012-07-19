<footer>
    <div class="container">
    <div class="row">
      <div class="span5" id="contact">
          <h6>get a quote for your business</h6>
          <div id="contactform">
            <form>

            <form name="contactform" method="post" action="contact_script.php">
                    <input name="name" placeholder="name" required="required" class="txtbox" maxlength="30" size="30">
                    <input name="email" placeholder="email" required="required" class="txtbox" maxlength="30" size="30">
                    <input name="pnumber" placeholder="phone number" required="required" class="txtbox" maxlength="30" size="30">
                    <textarea name="message" placeholder="message"  required="required" class="txtbox"></textarea>
                    <input type="submit" value="submit" class="btn primary contact_button">
                </form>
          </div>
      </div>
      <div class="span4" id="contactinfo">
        <h6>contact us</h6>
          <div id="info">
              <li><span>Sales</span>1-877-901-0023</li>
              <li><span>Tech</span>1-866-837-0777</li>
              <li><span>Fax</span>1-866-383-1663</li>

              <div class="mail"></div>
              <p>info@instacashatm.com</p>

              <div class="address"></div>
              <address><strong>InstaGroup Inc.</strong><br>
              6193 boul Metropolitain <br>
              Est St. Leonard Montreal <br>
              Quebec H1P 1X7 <br>
              </address>
          </div>
      </div>

      <div class="span4" id="products">
        <h6>products</h6>
        <li><a href="products_atm.php">ATM's</a></li>
        <li><a href="products_cash_drawer.php">Cash Drawers</a></li>
        <li><a href="products_touchscreen_terminals.php">Touch Screen terminals</a></li>
        <li><a href="products_ecommerce.php">e-Commerce software</a></li>  
        <li><a href="products_mastercard.php">Prepaid Mastercard</a></li>
        <li><a href="products_pos.php">P.O.S.</a></li>
      </div>

      <div class="span3" id="services">
        <h6>services</h6>
        <li><a href="Services_merchant_cash_advance.php">Merchant Cash Advance</a></li>
        <li><a href="Services_gift_loyalty_cards.php">Gift and Loyalty cards</a></li>
      </div>

  
    </div>
    </div><!--container -->
    <div id="copyright">
        <p>Home | products | Services | Contact | Apply | Career Oppurtunities <br>  
            COPYRIGHT © 2011 TEST SITEa. ALL RIGHTS RESERVED. <br>
        </p>
    </div>
</footer>
<!-- Login Modal  -->
 <div id="loginmodal" class="modal hide fade">
            <div class="modal-header">
                <a href="#" class="close">&times;</a>
                  <h3>User Login</h3>
                  <p>Secured Access</p>
           </div>


           <ul class="tabs" data-tabs="tabs">

              <li class="active tab-pane"><a href="#userlogin">Admin</a></li>
              <li><a href="#instalogin">InstaPrepaid</a></li>

           </ul>
              <div class="pill-content">
                 <div id="userlogin" class="active tab-pane">
                    <form>
                      <input type="text" placeholder="Terminal number" class="login_"> 
                      <input type="text" placeholder="password" class="login_">
                      <input type="button" value="login" class="btn primary">
                    </form> 
                  </div> 

              <div id="instalogin">
                  <form>
                      <input type="text" placeholder="User Code" class="login_"> 
                      <input type="text" placeholder="password" class="login_">
                      <input type="button" value="login" class="btn primary">
                </form> 
              </div>
    </div>


</div>




  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <script src="js/bootstrap-modal.js"></script>
  <script src="js/bootstrap-tabs.js"></script>
  <script src="js/bootstrap-twipsy.js"></script>
  <script src="js/bootstrap-popover.js"></script>
  <script src="js/jquery.nivo.slider.pack.js"></script>
  <script>
            $(function () {
              $("a[rel=popover]")
                .popover({
                  offset: 10
                })
                .click(function(e) {
                  e.preventDefault()
                })
            })

           $(function(){
              $('.techspecs').hide();  //code to hide content

                $(function(){
                  $('#qt6100').click(function(){ //if click
                      $('#open_button').toggleClass('open_button_bg'), //change background position
                         $('.techspecs').toggle(500); //will toggle div.techspecss
                     
                        
                  })
                
                })

            })


           $(function(){
              $('.techspecs2').hide();  //code to hide content

                $(function(){
                  $('#qt6600').click(function(){ //if click
                      $('#open_button2').toggleClass('open_button_bg'), //change background position
                         $('.techspecs2').toggle(500); //will toggle div.techspecss
                     
                        
                  })
                
                })

            })
        $(window).load(function() {
    $('#slider').nivoSlider({
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        directionNav: false, // Next & Prev navigation
        controlNav: true, // 1,2,3... navigation
        pauseOnHover: true, // Stop animation while hovering
        captionOpacity: 0.8, // Universal caption opacity
        randomStart: true, // Start on a random slide
    });
});

  </script>


  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>