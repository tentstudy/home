<?php
    function s($key)
    {
        global $s;
        echo $s[$key];
    }
    $langs = array(
        'vi' => 'Việt Nam',
        'en' => 'English'
    );
    $langToHtmlLang = array(
        'vi' => 'vi-VN',
        'en' => 'en-US'
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
        $lang = 'vi';
    }
?>
<!DOCTYPE html>
<html lang="<?php echo $langToHtmlLang[$lang]; ?>">
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
        <title>TentStudy - <?php s('spread_passion') ?></title>
        <link rel="shortcut icon" href="/images/icons/favicon.png" />
        <!-- Bootstrap & Styles -->
        <link href="/css/bootstrap.css" rel="stylesheet" />
        <link href="/css/bootstrap-theme.css" rel="stylesheet" />
        <link href="/css/block_grid_bootstrap.css" rel="stylesheet" />
        <link href="/css/owl.carousel.css" rel="stylesheet" />
        <link href="/css/owl.theme.css" rel="stylesheet" />
        <link href="/css/animate.min.css" rel="stylesheet" />
        <!--<link href="/css/jquery.circliful.css" rel="stylesheet" />-->
        <link href="/css/select2.css" rel="stylesheet" />
        <link href="/css/tablesaw.stackonly.css" rel="stylesheet" />
        <link href="/css/slicknav.css" rel="stylesheet" />
        <link href="/css/icons.css" rel="stylesheet" />
        <link href="/style.css" rel="stylesheet" />
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
        <?php require_once 'layout/navbar.php'; ?>
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
    <!-- Slider -->
    <div id="image_bg_slider" class="slidercontainer">
        <div id="mainslider" class="owl-carousel">
            <!-- Slider 1 -->
            <div class="item">
                <div class="slidecaption">
                    <h2><?php s('programmer_training') ?></h2>
                    <h4>C, C++, C#, Java, PHP, NodeJS,...</h4>
                    <p><a class="btn waves-effect waves-light btn-lg btn-success" href="shared.html"><i class="icon-paper-plane"></i> <?php s('more_details') ?></a></p>
                </div>
                <span class="img-overly"></span>
                <img src="images/slider/1.png" alt="" />
            </div>
            <!-- Slider 2 -->
            <div class="item">
                <div class="slidecaption wow fadeIn">
                    <h2><?php s('professional_website_design') ?></h2>
                    <h4><?php s('professional_website_design_des') ?></h4>
                    <p><a class="btn waves-effect waves-light btn-lg btn-success" href="shared.html"><i class="icon-paper-plane"></i> <?php s('more_details') ?></a></p>
                </div>
                <span class="img-overly"></span>
                <img src="images/slider/2.png" alt="" />
            </div>
            <!-- Slider 3 -->
            <div class="item">
                <div class="slidecaption">
                    <h2><?php s('mobile_app_development') ?></h2>
                    <h4><?php s('mobile_app_development_des') ?></h4>
                    <p><a class="btn waves-effect waves-light btn-lg btn-success" href="#"><i class="icon-paper-plane"></i> <?php s('more_details') ?></a></p>
                </div>
                <span class="img-overly"></span>
                <img src="images/slider/3.png" alt="" />
            </div>
        </div>
        <!-- End of Slider -->
        <!-- Slider Pagenation -->
        <div class="bg_dark banner-pagenate">
            <div class="row">
                <div id="mainslider-nav" class="owl-carousel btn-group">
                    <div class="item"><i class="fa fa-graduation-cap fa-2x"></i><?php s('training'); ?></div>
                    <div class="item"><i class="fa fa-globe fa-2x"></i><?php s('web_design') ?></div>
                    <div class="item"><i class="fa fa-mobile fa-2x"></i><?php s('mobile_applications') ?></div>
                </div>
            </div>
        </div>
        <!-- End of Slider Pagenation -->
    </div>
    <!-- End of Full Slider -->
<!-- <section class="bg_gray" style="height: 60px;"></section> -->
<section class="statistics section_space">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="title"><?php s('foundation_&_development') ?></h2>
            <br />
            <h3 class="text-center"><?php s('foundation_&_development_des') ?></h3>
        </div>
    </div>
</section>
<!-- <section class="bg_gray" style="height: 60px;"></section> -->
<section class="about bg_gray">
<div class="row">
    <div class=" col-sm-12">
        <div id="ourteam">
            <div class="container section_space">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="title"><?php s('our_leadership_team') ?></h3>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>-->
                </div>
                <!-- First Row of ourteam -->
                <div class="row1">
                    <!-- Team 1 -->
                    <div class="col-sm-3 margin-top-40">
                        <a href="#" class="member-profile">
                            <img src="images/team/dung.jpg" alt="">
                            <span><?php s('the_lead') ?></span>
                            <h4>Dung <span>Nguyen Dang</span></h4>
                        </a><br>
                        <ul>
                            <li><a href="https://facebook.com/DangDungCNTT" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href="https://twitter.com/DangDungCNTT" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/dangdungcntt/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/dung-nguyen-dang-106928144" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Team 2 -->
                    <div class="col-sm-3 margin-top-40">
                        <a href="#" class="member-profile">
                            <img src="images/team/socola.jpg" alt="">
                            <span><?php s('web_developer') ?></span>
                            <h4>Tien <span>Nguyen The</span></h4>
                        </a><br>
                        <ul>
                            <li><a href="https://www.facebook.com/SocolaDaiCa1997" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                        </ul>
                    </div>
                    <!-- Team 3 -->
                    <div class="col-sm-3 margin-top-40">
                        <a href="#" class="member-profile">
                            <img src="images/team/thanh.jpg" alt="">
                            <span><?php s('designer') ?></span>
                            <h4>Thanh <span>Nguyen Duc</span> </h4>
                        </a>
                        <ul>
                            <li><a href="https://www.facebook.com/nguyenthanhat1997/" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href="https://instagram.com/thanhdk97/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Team 4 -->
                    <div class="col-sm-3 margin-top-40">
                        <a href="#" class="member-profile">
                            <img src="images/team/quan.jpg" alt="">
                            <span><?php s('seo_manager') ?></span>
                            <h4>Quan <span>Luong Dinh</span></h4>
                        </a><br>
                        <ul>
                            <li><a href="https://www.facebook.com/dinhquan.157" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- End First Row -->
                <!-- View All Button -->
                <!--<div class="col-md-12">
                    <button class="btn btn-lg waves-effect waves-light btn-success fadeIn margin-top-40">View All</button>
                </div>-->
            </div>
        </div>
    </div>
</div>
</section>
<!--  Blog Posts -->
<section class="blogpost-home section_space">
<div class="row">
    <div class="col-sm-12">
        <div class="text-center">
            <h2 class="title"><?php s('tentStudy_blog_posts') ?></h2>
            <!--<h3>Coming soon</h3>-->
        </div>
        <!--<div class="col-sm-4 margin-top-40">
            <div class="home-blog-posts">
                <div class="home-blog-image">
                    <a href="#">
                                            <img src="images/blog/blog1.jpg" alt="">
                                        </a>
                </div>
                <div class="post-info">
                    <h3><a href="#">Coming soon</a></h3>
                    <p>Our blog is coming soon</p>
                </div>
            </div>
        </div>-->
        <!--<div class="col-sm-4 margin-top-40">
            <div class="home-blog-posts">
                <div class="home-blog-image">
                    <a href="#">
                                            <img src="images/blog/blog2.jpg" alt="">
                                        </a>
                </div>
                <div class="post-info">
                    <h3><a href="#">Customize templates using wide array of options from Server Settings</a></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 margin-top-40">
            <div class="home-blog-posts">
                <div class="home-blog-image">
                    <a href="#">
                                            <img src="images/blog/blog3.jpg" alt="">
                                        </a>
                </div>
                <div class="post-info">
                    <h3><a href="#">Secure your applications with robust infrastructure.</a></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>-->
        <div class="text-center ">
            <a href="https://blog.tentstudy.xyz" class="btn waves-effect waves-light btn-success btn-lg margin-top-40 "><?php s('visit_our_blog') ?></a>
        </div>
    </div>
</div>
</section>
<!--  End of Blog Posts -->
<!-- Help -->
<section class="bg_dark">
<div class="page-help section_space">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2><?php s('need_help_contact_our_team') ?></h2>
                <p class="font-bold"><?php s('need_help_contact_our_team_des') ?> <span class="deskop-help">+841689798731</span>
                <span class="mobile-help"><a href="tel:+841689798731">+841689798731</a></span>
            </p>
        </div>
        <div class="col-md-3"> <a href="https://facebook.com/TentStudy" class="btn waves-effect waves-light btn-secondary btn-lg"><?php s('contact_tentStudy') ?></a> </div>
    </div>
</div>
</div>
</section>
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
            <p class="copyright"><a href="#">TentStudy</a> - <?php s('theme_by_trewSoft') ?>.</p>
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
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!--<script src="/js/hoverIntent.js"></script>-->
<script src="/js/superfish.min.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/wow.min.js"></script>
<!--<script src="/js/jquery.circliful.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.responsiveTabs.js"></script>-->
<script src="/js/jquery.slicknav.min.js"></script>
<!--<script src="/js/retina.min.js"></script>
<script src="/js/counterup.min.js"></script>
<script src="/js/waves.js"></script>-->
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