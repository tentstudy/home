<?php
    function s($key)
    {
        global $s;
        echo $s[$key];
    }
    $langs = array(
        'vn' => 'Việt Nam',
        'en' => 'English'
    );
    $ok = false;
    $lang;
    foreach ($langs as $lang => $value) {
        if (array_key_exists($lang, $_GET)) {
            require_once __DIR__ . "/data/lang/{$lang}.php";
            $ok = true;
            break;
        }
    }
    if(!$ok){
        require_once __DIR__ . '/data/lang/vi.php';
        $lang = 'vn';
    }
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="fb:app_id" content="1878792532378003">
        <meta property="og:site_name" content="www.tentstudy.xyz">
        <meta property="og:type" content="website">
        <meta property="og:title" content="TentStudy - Spread Passion" />
        <meta property="og:description" content="TentStudy - Spread Passion - Lan tỏa đam mê" />
        <meta property="og:url" content="https://tentstudy.xyz/">
        <meta property="og:image" content="https://tentstudy.xyz/images/banner_share_fb.png" />
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:locale" content="vi_VN">
        <title>TentStudy - Spread Passion</title>
        <link rel="shortcut icon" href="images/icons/favicon.png" />
        <!-- Bootstrap & Styles -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-theme.css" rel="stylesheet" />
        <link href="css/block_grid_bootstrap.css" rel="stylesheet" />
        <link href="css/owl.carousel.css" rel="stylesheet" />
        <link href="css/owl.theme.css" rel="stylesheet" />
        <link href="css/animate.min.css" rel="stylesheet" />
        <!--<link href="css/jquery.circliful.css" rel="stylesheet" />-->
        <link href="css/select2.css" rel="stylesheet" />
        <link href="css/tablesaw.stackonly.css" rel="stylesheet" />
        <link href="css/slicknav.css" rel="stylesheet" />
        <link href="css/icons.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Global Fullpage Loader-->
        <div id="global-loader"></div>
        <!-- Top MiniBar-->
        <!--<section class="topminibar">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-6 col-xs-12">
                    <div class="text-right loginbuttons">
                        <a class="btn waves-effect waves-light btn-sm btn-default" href="#" title=""><i class="fa fa-pencil"></i>  Register </a>
                        <a class="btn waves-effect waves-light btn-sm btn-primary" href="#" title=""><i class="fa fa-user"></i> Account Login</a>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End of Top MiniBar-->
        <!-- Header-->
        <section class="menu-header top">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-3">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-9">
                    <nav id="desktop-menu">
                        <ul class="sf-menu" id="navigation">
                            <li class="current"><a href="index.php"><i class="fa fa-home"></i><?php s('home') ?></a></li>
                            <li><a href="contact.php"><i class="fa fa-envelope fa-fw"></i><?php s('contact') ?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>


        <!-- End of Header-->
        <!-- Breadcrumps -->
        <!--<section class="breadcrumbs">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Form Elements</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>You are here: </li>
                        <li class="active"><a href="index.html">Home</a>
                    </li>
                </ol>
            </div>
        </div>
    </section>-->
    <!-- End of Breadcrumps -->
        <!-- End of Slider -->
        <!-- Slider Pagenation -->
        <!-- End of Slider Pagenation -->

        <!-- Breadcrumps -->
      
      <!-- Contact Form-->
      <section>
         <div class="row section_space">
            <div class="col-sm-8 center-block">
               <h2 class="title"><?php s('contact_us') ?></h2>
               <div id="sendstatus"></div>
               <div id="contactform">
                  <form method="post" action="sendmail.php">
                     <p><label for="name"><?php s('your_name') ?></label> <input type="text" class="form-control" name="name" id="name" tabindex="1" /></p>
                     <p><label for="email"><?php s('contact_email') ?></label> <input type="text" class="form-control" name="email" id="email" tabindex="2" /></p>
                     <p><label for="comments"><?php s('your_message_to_us') ?></label> <textarea  class="form-control" name="comments" id="comments" cols="12" rows="6" tabindex="3"></textarea></p>
                     <p><button name="submit" type="submit" id="submit" class="btn waves-effect waves-light btn-success" tabindex="4" ><?php s('submit') ?></button> </p>
                  </form>
               </div>
            </div>
         </div>
      </section>
    <!-- End of Full Slider -->

    <!-- Contact -->
      <div class="row coloumgrid">
         <div class="col-sm-12 text-center multipannels section_space">
            <div>
                <h3 class="title"><?php s('contact_us') ?></h3>
            </div>

            <div class="col-sm-6 margin-top-40">
                   <div class="feature">
                      <div class="fa-stack fa-lg fa-5x">
                        <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                        <i class="fa icon-earphones fa-stack-1x fa-inverse text-green"></i>
                      </div>
                      <h3>24X7 <?php s('call_center') ?></h3>
                      <p>+841689798731</p>
                   </div>
            </div>

            <div class="col-sm-6 margin-top-40">
                   <div class="feature">
                      <div class="fa-stack fa-lg fa-5x">
                        <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                        <i class="fa icon-envelope fa-stack-1x fa-inverse text-green"></i>
                      </div>
                      <h3><?php s('email_us') ?></h3>
                      <p><a href="#">tentstudyxyz@gmail.com</a></p>
                   </div>
            </div>

         </div>
      </div>

      <hr>
      <!-- End of Contact -->

    <!--  Help -->
      <section class="bg_dark">
         <div class="page-help section_space">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                    <h2><?php s('need_help') ?></h2>
                    <p class="font-bold"><?php s('call_support') ?>, <b>Email</b> <?php s('any_time_or') ?><span class="deskop-help">+841689798731</span> <span class="mobile-help"><a href="tel:+841689798731">+841689798731</a></span></p>
                    </div>
                    <div class="col-md-3"> <a href="#" class="btn waves-effect waves-light btn-secondary btn-lg"><?php s('contact_tentstudy') ?></a> </div>
                </div>
            </div>
        </div>
      </section>
      <!--  End of Help -->
<!-- <section class="bg_gray" style="height: 60px;"></section> -->
<section class="statistics section_space">
<!--  Blog Posts -->

<!--  End of Blog Posts -->
<!-- Help -->
<!-- End of Help -->
<!-- Footer -->
<section class="margin-top-30">
<div class="row">
<div class="col-sm-6 col-xs-6">
    <div class="footer_logo">
        <a href="index.html"><img src="images/logo.png" alt=""></a>
    </div>
</div>
<div class="col-sm-6 text-right">
    <div class="footer-social-icons">
        <ul class="social-icons">
            <li><a href="https://facebook.com/TentStudy" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/TentStudy" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
            <li><a href="https://youtube.com/TentStudy" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
            <li><a href="https://linkedin.com/TentStudy" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        </ul>
        <h6 class="follow"><?php s('follow_us') ?></h6>
    </div>
</div>
</div>
<div class="copyright">
<!-- Start Container -->
<div class="container">
    <div class="row">
        <div class="span12">
            <p class="copyright"><a href="#">TentStudy</a> - Theme by TrewSoft.</p>
        </div>
    </div>
</div>
<!-- End Container -->
</div>
</section>
<!-- End of Footer -->
<!--  Go to Top-->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<!--  End of Go to Top -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/hoverIntent.js"></script>-->
<script src="js/superfish.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/wow.min.js"></script>
<!--<script src="js/jquery.circliful.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.responsiveTabs.js"></script>-->
<script src="js/jquery.slicknav.min.js"></script>
<!--<script src="js/retina.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/waves.js"></script>-->
<script>
!function(o){"use strict";o(document).on("ready",function(n){o("#navigation").superfish({delay:300,animation:{opacity:"show",height:"show"},speed:"fast",dropShadows:!1}),o(function(){o("#navigation").slicknav({closedSymbol:"&#8594;",openedSymbol:"&#8595;"})})}),new WOW({boxClass:"wow",animateClass:"animated",offset:100,mobile:!1}).init(),o(window).on("load",function(n){o("#global-loader").fadeOut("slow")}),o(window).on("scroll",function(n){o(this).scrollTop()>300?o("#back-to-top").fadeIn("slow"):o("#back-to-top").fadeOut("slow")}),o("#back-to-top").on("click",function(n){return o("html, body").animate({scrollTop:0},600),!1})}(jQuery);
</script>
<script src="js/myjs.js"></script>
<script>
$(document).on("ready",function(){sliderJS(3,3,3,3,2)});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{},Tawk_LoadStart=new Date;(function(){var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0,a.src="https://embed.tawk.to/59671f731dc79b329518e0c9/default",a.charset="UTF-8",a.setAttribute("crossorigin","*"),b.parentNode.insertBefore(a,b)})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>