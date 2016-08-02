<?php
$userInfo = wp_get_current_user();
$userName = $userInfo->user_login;
if ((is_page('register') && is_user_logged_in()) || (is_page('my-account') && !is_user_logged_in())):
    wp_redirect(get_site_url());
endif;
?>
<?php if (is_user_logged_in()): ?>
    <style> #menu-item-85{ display:none; }</style>
<?php endif; ?>

<?php if (!is_user_logged_in()): ?>
    <style> #menu-item-87{ display:none; }</style>
<?php endif; ?> 

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Stylesheets
        ============================================= -->
        <!-- <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" /> -->
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css" type="text/css" />
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/swiper.css" type="text/css" />
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/responsive.css" type="text/css" />
        <link href="<?= get_template_directory_uri() ?>/css/sweetalert.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <!-- Document Title
        ============================================= -->
        <title>AYUSHAKTI</title>
        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function (d, s) {
                var z = $zopim = function (c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute("charset", "utf-8");
                $.src = "//v2.zopim.com/?45lMCv0HCvqUxmbkSL70r6CyX4r8KXIK";
                z.t = +new Date;
                $.
                        type = "text/javascript";
                e.parentNode.insertBefore($, e)
            })(document, "script");
        </script>
        <!--End of Zopim Live Chat Script-->
    </head>

    <body class="stretched" ng-app="ayushakti">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">

            <!-- Header
            ============================================= -->
            <header id="header" class="full-header">

                <div id="header-wrap">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="<?= get_template_directory_uri() ?>/images/logo.png" alt="Canvas Logo"></a>
                            <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="<?= get_template_directory_uri() ?>/images/logo@2x.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu">
                            <?php wp_nav_menu(['container' => 'ul']) ?>

                            <!--
                                <ul>
                                        <li class="current"><a href="index.html"><div>Home</div></a></li>
                                        <li><a href="diseases.html"><div>Diseases</div></a></li>
                                        <li><a href="herbalSupplements.html"><div>Herbal Supplements</div></a></li>
                                        <li><a href="therapy.html"><div>Therapy</div></a></li>
                                        <li><a href="pulse.html"><div>Pulse</div></a></li>
                                        <li><a href="ayurvedaBasics.html"><div>Ayurveda Basics</div></a></li>
                                        <li><a href="loginRegister.html"><div>Login</div></a></li>	
                                        <li><a href="#">
                                                <select class="form-control">
                                                        <option value="" selected>Select Language</option>
                                                        <option value="eng">English</option>
                                                        <option value="ger">German </option>
                                                </select>
                                        </a></li>								
                                </ul>			
                        </nav><!-- #primary-menu end -->

                    </div>

                </div>

            </header><!-- #header end -->