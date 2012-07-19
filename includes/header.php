<?php include_once('includes/common.php'); ?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $lang['HEADER_TITLE'] ?></title>
  <meta name="description" content="<?php echo $lang['DESCRIPTION'] ?>">
  <meta name="keywords" content="<?php echo $lang['KEYWORDS'] ?>"/>
  <meta name="author" content="www.marionserenio.com">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nivo-slider.css">
  <link rel="stylesheet/less" href="css/style.less">
  <script src="js/less-1.1.5.min.js"></script>
  <?php 
  //CAPTCHA IF SCRIPT FOR APPLY.PHP
      if ($page == "apply") {
        echo '
          <script type="text/javascript">
           var RecaptchaOptions = {
              theme : \'custom\',
              custom_theme_widget: \'recaptcha_widget\'
           };
           </script>
        ';
      }else {
        echo '';
      }
   ?>


  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
       <script src="lib/modernizr-2.0.6.min.js"></script>
</head>

<body>

<div id="topheader">
  <div class="container">
    <div id="login">
      <a href="#" data-controls-modal="loginmodal" data-backdrop="static"><?php echo $lang['HEADER_LOGIN'] ?> »</a>
        <div id="languages">
           <a href="./?lang=en">English | </a>
           <a href="./?lang=fr">French</a>
        </div>
           
    </div>
  </div><!-- container-->
</div>
<header>
  <div class="container" id="header">
      <nav>
        <ul>
          <li><a href="index.php"><?php echo $lang['HOME'] ?></a></li>
          <li><a href="About-us.php"><?php echo $lang['ABOUT_US'] ?></a></li>
          <li class="mdrop"><a href="products.php"><?php echo $lang['PRODUCTS'] ?><span>&#x25BC;</span></a>
                <div class="megadrop">
                    <div id="products">
                       <ul>
                         <ol><a href="products_atm.php">&#9656;ATM's</a></ol>
                         <ol><a href="products_cash_drawer.php">&#9656;<?php echo $lang['CASH_DRAWERS'] ?></a></ol>
                         <ol><a href="products_touchscreen_terminals.php">&#9656;<?php echo $lang['TOUCH_SCREEN_TERMINALS']  ?></a></ol>
                         <ol><a href="products_ecommerce.php">&#9656;<?php echo $lang['ECOMMERCE_SOFTWARE']  ?></a></ol>              
                         <ol><a href="products_mastercard.php">&#9656;<?php echo $lang['PREPAID_MASTERCARD'] ?></a></ol>
                         <ol><a href="products_pos.php">&#9656;<?php echo $lang['POS'] ?></a></ol>
                      </ul>

                    </div>  
                </div>
          </li>
          <li><a href="services.php"><?php echo $lang['SERVICES']; ?><span>&#x25BC;</span>
                <div class="megadrop">
                    <div id="services">
                      <ul>
                         <ol><a href="Services_merchant_cash_advance.php">&#9656;<?php echo $lang['MERCHANT_CASH_ADVANCE'] ?></a></ol>
                         <ol><a href="Services_gift_loyalty_cards.php">&#9656;<?php echo $lang['GIFT_LOYALTY_CARDS'] ?></a></ol>
                      </ul>
                    </div>  
                </div>

          </a>
          </li>
          <li><a href="contact.php"><?php echo $lang['CONTACT'] ?></a></li>
          <li><a href="apply.php"><?php echo $lang['APPLY'] ?></a></li>
        </ul>
      </nav>

           <div id="slider" class="nivoSlider">
                <img src="img/slider3-ecommerce.jpg" alt="" />
                <img src="img/slider1-instacash.jpg" alt="" /> 
                <img src="img/slider2-instapayment.jpg" alt="" />
                <img src="img/slider4-instaprepaid.jpg" alt="" /> 
                <img src="img/slider5-phoneapp.jpg" alt="" /> 
                
             </div>
             <div id="htmlcaption" class="nivo-html-caption">
               <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>
  </div>
</header>