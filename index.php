<?php

if (isset($_REQUEST['wlanguage'])) {

  switch ($_REQUEST['wlanguage']) {
    case 'en':
      
      require_once("languages/en.php");
      break;
    
    case 'fr':

      require_once("languages/fr.php");
      break;

    case 'ger':

      require_once("languages/ger.php");
      break;  

    case 'it':

      require_once("languages/it.php");
      break;

    case 'es':

      require_once("languages/es.php");
      break;    

    case 'ru':

      require_once("languages/ru.php");
      break;     

    default:
 
      require_once("languages/en.php");
      break;
  }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/slick/slick.css">
    <link rel="stylesheet" href="/assets/slick/slick-theme.css">
    <link rel="stylesheet" href="/assets/elagent-icon/style.css">
    <link rel="stylesheet" href="/assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="/assets/animation/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <title>PRK-1U</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="/img/spinner_logo.png" alt="">
                    <h4><span><?=$lng_strings['string_number']?></span></h4>
                </div>
            </div>
            <h2 class="head"><?=$lng_strings['string_quotes']?></h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one mt-40 menu_logo_change" id="sticky">
            <div class="container">
                <a class="navbar-brand sticky_logo" href="">
                    <img src="/img/logo.png" width="200px;" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto dk_menu">
                        <li class="nav-item dropdown submenu active">
                            <a href="/en/" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</a>
                        </li>
                        <li class="nav-item dropdown submenu mega_menu tab-demo">
                            <a href="/fr/" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">French</a>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="/ger/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Germany
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="/ru/" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Rusian
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="/it/" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Italian
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="/es/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Spanish
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="kbDoc-banner-support">
            <div class="banner-content text-center">
                <div class="banner-content-wrapper">
                    <h1 class="banner-title wow fadeInUp"><?=$lng_strings['string_welcome']?></h1>
                    <p class="banner-description wow fadeInUp" data-wow-delay="0.3s">
                        <?=$lng_strings['string_search']?>
                    </p>
                    <div class="banner-search-form-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <form onsubmit="return fetch();" class="banner-search-form">
                            <input type="text" id="search" autocomplete="off" required placeholder="<?=$lng_strings['string_search1']?>" pattern=".{3,}" name="search" onkeyup="getStates(this.value)">
                            <button type="submit" value="Search" onclick="location.href='#results-list'"><input type="hidden" name="lang" id="lang" value="<?=$_REQUEST['wlanguage']?>"><i class="icon_search"></i></button>
                        </form>
                    </div>
                    <ul id="results"></ul>
                </div>
            </div>
            <ul class="people-image wow fadeIn" data-wow-delay="0.7s">
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn1.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn2.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn3.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn4.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn5.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn6.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn1.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn2.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn3.png" alt="people"></li>
                <li class="ppl-li"><img class="wow zoomIn ppl-img" data-wow-delay="0.4s" src="/img/home_support/bn4.png" alt="people"></li>
            </ul>
            <div class="bottom-shape">
                <img src="/img/home_support/banner-bottom-shape.png" alt="banner">
            </div>
        </section>
        
        <section class="community-posts-area" id="results-list">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="h_title wow fadeInUp">
                        <?=$lng_strings['string_result']?>
                    </h2>
                        <div id="results"></div>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">
                      <?=$lng_strings['string_result1']?>
                    </p>
                </div>
                <div class="community-posts-wrapper">
                    <div id="search-results"></div>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.community-posts-area -->
        <footer class="footer_area f_bg_color">
            <img class="p_absolute leaf" src="/img/v.svg" alt="">
            <img class="p_absolute f_man wow fadeInLeft" data-wow-delay="0.4s" src="/img/home_two/f_man.png" alt="">
            <img class="p_absolute f_cloud" src="/img/home_two/cloud.png" alt="">
            <img class="p_absolute f_email" src="/img/home_two/email-icon.png" alt="">
            <img class="p_absolute f_email_two" src="/img/home_two/email-icon_two.png" alt="">
            <img class="p_absolute f_man_two wow fadeInLeft" data-wow-delay="0.2s" src="/img/home_two/man.png" alt="">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget subscribe_widget wow fadeInUp">
                                <ul class="list-unstyled f_social_icon">
                                    <li><a href="https://www.facebook.com/prk1u/"><i class="social_facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/prk1u/"><i class="social_instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/prk-1u"><i class="social_youtube"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/prk-1u/"><i class="social_linkedin"></i></a></li>
                                    <li><a href="https://twitter.com/PRK1U"><i class="social_twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_30 wow fadeInUp" data-wow-delay="0.2s">
                                <h3 class="f_title"><?=$lng_strings['string_company']?></h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="https://www.prk-1u.com/"><?=$lng_strings['string_about']?></a></li>
                                    <li><a href="https://www.prk-1u.com/contact/contact-infos/"><?=$lng_strings['string_contact']?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget link_widget wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f_title"><?=$lng_strings['string_suport']?></h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="https://www.prk-1u.com/agenda/"><?=$lng_strings['string_help']?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_70 wow fadeInUp" data-wow-delay="0.6s">
                                <h3 class="f_title"><?=$lng_strings['string_pages']?></h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="https://www.prk-1u.com/world-convention/"><?=$lng_strings['string_topic']?></a></li>
                                    <li><a href="https://www.prk-1u.com/world-convention/"><?=$lng_strings['string_archive']?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="border_bottom"></div>
                </div>
            </div>
            <div class="footer_bottom text-center">
                <div class="container">
                    <p>© 2021 <?=$lng_strings['string_all']?> <a href="">PointMars</a></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/pre-loader.js"></script>
    <script src="/assets/bootstrap/js/popper.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/parallaxie.js"></script>
    <script src="/js/TweenMax.min.js"></script>
    <script src="/js/jquery.parallax-scroll.js"></script>
    <script src="/assets/wow/wow.min.js"></script>
    <script src="/assets/counterup/jquery.counterup.min.js"></script>
    <script src="/assets/counterup/jquery.waypoints.min.js"></script>
    <script src="/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
    <script src="/js/randomize.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/fetch.js"></script>
    <script>
       function getStates(value) {

        var lang = $('#lang').val();

        $.post("/ajax/live-search/", {name:value, lang:lang},function(data){
            $("#results").html(data);
        }
    ); 
}
</script>

<script type="text/javascript">
    function useThis(e) {
        var num_res = e.find(".serieNum").html();

        $('#search').val(num_res);
        $("#search-results").html('');
        $( ".banner-search-form" ).submit();
        $("#results").html('');
        window.location.href='#results-list';
        // alert(html_res);
    }
</script>


</body>

</html>