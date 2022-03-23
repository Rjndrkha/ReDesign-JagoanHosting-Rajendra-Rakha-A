<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jagoan Hosting | Homepage</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet"><!-- Nunito font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet"><!-- Montserrat font -->
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700" rel="stylesheet"><!-- Heebo font -->

    <!-- Favicons -->
    <link rel="shortcut icon" href="image/jagoanhosting.png" />
    <link rel="apple-touch-icon" href="image/jagoanhosting.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="image/jagoanhosting.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="image/jagoanhosting.png" />

    <!-- Bootstrap core CSS -->
    <link href="main/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!-- flaticon styles -->
    <link href="main/icons/flaticon.css" rel="stylesheet">
    <!-- flaticon styles -->
    <link href="main/icons-t/flaticon.css" rel="stylesheet">
    <!-- main template styles -->
    <link href="main/css/main.css" rel="stylesheet">
    <!-- bootstrap offcanvas styles -->
    <link href="main/css/bootstrap.offcanvas.min.css" rel="stylesheet">
    <!-- fontawesome styles -->
    <link href="main/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- animate styles -->
    <link href="main/css/animate.css" rel="stylesheet">
    <!-- responsive template styles -->
    <link href="main/css/responsive.css" rel="stylesheet">

    <!-- flickity Stylesheets -->
    <link rel="stylesheet" href="main/css/flickity.min.css">
    <!-- video modal -->
    <link rel="stylesheet" href="main/css/modal-video.min.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="main/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="main/owlcarousel/assets/owl.theme.default.min.css">
    <!-- technology icon Stylesheets -->
    <link rel="stylesheet" href="main/technology-icon/flaticon.css">





</head>

<body>
    <!-- start modal video -->
    <div class="modal fade" id="videomodal" tabindex="-1" role="dialog" aria-labelledby="videomodal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="video"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal video -->

    <!-- start preloader -->
    <div class="preloader">
        <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
        </svg>
    </div>
    <!-- end preloader -->

    <!-- start header -->
    <div id="header" class="homepagetwostyle d-flex mx-auto flex-column">
        <!-- start search block -->
        <div class="search-header-block">

            <form id="pitursrach-header" name="formsearch" method="get" action="404.html">
                <input name="s" id="search" type="text" class="text" value="" placeholder="START TYPING AND PRESS ENTER TO SEARCH">
                <button type="submit" class="submit"><span class="fa fa-search"></span></button>
                <a class="closesrch-her-block np-dsp-block">
                    <span class="first-stright"></span>
                    <span class="second-stright"></span>
                </a>
            </form>

        </div>
        <!-- end search block -->

        <!-- start header animations -->
        <div class="header-animation">
            <div id="particles-bg"></div>

            <!-- start video background -->
            <div class="video-bg-nuhost-header">
                <div id="video_cover"></div>
                <video autoplay muted loop>
                    <source src="main/media/coodiv-vid.mp4" type="video/mp4">
                </video>
                <span class="video-bg-nuhost-header-bg"></span>
            </div>
            <!-- end video background -->
            <span class="courve-gb-hdr-top"></span>
            <!------- header support ring ------->
            <a class="support-header-ring" href="#"><img src="main/img/svgs/support.svg" alt="" /> <span>support team</span></a>
            <!------- end header support ring ------->
        </div>
        <!-- end header animations -->

        <!-- start main header section -->
        <div class="top-header-nav-home mb-auto">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light header-nav-algo-coodiv header-nav-algo-coodiv-v2">
                    <!-- start logo place -->
                    <a class="navbar-brand" href="/index">
                        <img class="black-bg-logo" src="image/jagoanhosting.png" alt="" />
                        <!-- black background logo -->
                        <img class="white-bg-logo" src="image/jagoanhosting.png" alt="" />
                        <!-- white background logo -->
                        <span>Best Hosting Provider in Indonesia</span>
                    </a>
                    <!-- end logo place -->
                    <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas" data-target="#offcanvas-menu-home">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- start collapse navbar -->
                    <div class="collapse navbar-collapse navbar-offcanvas" id="offcanvas-menu-home">
                        <!-- start navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mega-dropdown">
                                <a class="nav-link dropdown" href="#" id="megadrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cloud VPS <span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="megadrop">
                                    <div class="price-mega-menu-home">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 banner-hosting-menu">
                                                <h5>#LebihBebas Kembangin Website dan Aplikasi Dengan VPS X Jagoan Hosting</h5>
                                                <p>Bebas Kelola Server Untuk Berbagai Macam
                                                    Kebutuhan Aplikasimu Layaknya Komputer Pribadi.</p>


                                            </div>
                                            <div class="col-md-8 plans-hosting-menu">
                                                <h5>our hosting plans</h5>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-4 megamenu-plans">
                                                        <h4 class="price-title">Jagoan Hosting</h4>
                                                        <a class="" href="#">
                                                            <span class="price-price">VPS X Jagoan Hosting </span>
                                                        </a>
                                                        <p class="price-text">Virtual server yang diperkuat teknologi hardware yang telah dioptimasi dan melalui berbagai benchmark.
                                                            Hasilnya, VPS-X memiliki score tinggi dan price per-perfomance terbaik.</p>

                                                        </a>
                                                    </div>

                                                    <div class="col-md-4 megamenu-plans">
                                                        <h4 class="price-title">Jagoan Hosting</h4>
                                                        <a class="" href="#">
                                                            <span class="price-price">Cloud Object Storage </span>
                                                        </a>
                                                        <p class="price-text">Kami siapkan cloud object storage untuk kamu yang butuh kebebasan menambah
                                                            storage tanpa membeli resource lain yang tidak diperlukan.</p>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item mega-dropdown">
                                <a class="nav-link dropdown" href="#" id="megadrop-services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hosting <span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="megadrop-services">
                                    <div class="our-services-mega-menu-header">
                                        <div class="row justify-content-center our-services-mega-menu-header-items">
                                            <a class="col-md-2" href="domain-search.html">
                                                <i class="flaticon-internet"></i>
                                                <span>Unlimited Hosting</span>
                                                <b>Unlimited Web Hosting paling murah se Indonesia. Free Domain & SSL</b>
                                            </a>

                                            <a class="col-md-2" href="web-hosting.html">
                                                <i class="flaticon-database-14"></i>
                                                <span>Mix & Match</span>
                                                <b>Custom hosting sendiri! Dapatkan performa maksimal dengan harga minimal </b>
                                            </a>

                                            <a class="col-md-2" href="reseller-hosting.html">
                                                <i class="flaticon-database-24"></i>
                                                <span>Reseller Hosting</span>
                                                <b>Lebih Hemat dengan Reseller Hosting untuk yang ingin bisnis Hosting Indonesia, atau bisnis pembuatan website.</b>
                                            </a>

                                            <a class="col-md-2" href="WordPress-hosting.html">
                                                <i class="fab fa-wordpress-simple"></i>
                                                <span>B2B Hosting</span>
                                                <b>Website perusahaan kamu akan tetap tangguh dengan kebutuhan storage yang super besar</b>
                                            </a>

                                            <a class="col-md-2" href="ddos.html">
                                                <i class="flaticon-shield-7"></i>
                                                <span>B2C Hosting </span>
                                                <b>Pastikan selalu website bisnis kamu tetap nyaman bila diakses banyak visitor.</b>
                                            </a>

                                            <a class="col-md-2" href="cloud-hosting.html">
                                                <i class="flaticon-server-3"></i>
                                                <span>Email Pribadi</span>
                                                <b>Bangun Kredibilitas Brand lebih Profesional dengan Layanan Email Hosting Murah</b>
                                            </a>
                                            <a class="col-md-2" href="cloud-hosting.html">
                                                <i class="flaticon-server-3"></i>
                                                <span>Email Bisnis</span>
                                                <b>Dengan Email Bisnis, kirim dan simpan file dengan biaya yang lebih terjangkau</b>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item mega-dropdown">
                                <a class="nav-link dropdown" href="#" id="megadrop-services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Buat Website <span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="megadrop-services">
                                    <div class="our-services-mega-menu-header">
                                        <div class="row justify-content-center our-services-mega-menu-header-items">
                                            <a class="col-md-2" href="domain-search.html">
                                                <i class="flaticon-internet"></i>
                                                <span>Unlimited Hosting</span>
                                                <b>Unlimited Web Hosting paling murah se Indonesia. Free Domain & SSL</b>
                                            </a>

                                            <a class="col-md-2" href="web-hosting.html">
                                                <i class="flaticon-database-14"></i>
                                                <span>Mix & Match</span>
                                                <b>Custom hosting sendiri! Dapatkan performa maksimal dengan harga minimal </b>
                                            </a>

                                            <a class="col-md-2" href="reseller-hosting.html">
                                                <i class="flaticon-database-24"></i>
                                                <span>Reseller Hosting</span>
                                                <b>Lebih Hemat dengan Reseller Hosting untuk yang ingin bisnis Hosting Indonesia, atau bisnis pembuatan website.</b>
                                            </a>

                                            <a class="col-md-2" href="WordPress-hosting.html">
                                                <i class="fab fa-wordpress-simple"></i>
                                                <span>B2B Hosting</span>
                                                <b>Website perusahaan kamu akan tetap tangguh dengan kebutuhan storage yang super besar</b>
                                            </a>

                                            <a class="col-md-2" href="ddos.html">
                                                <i class="flaticon-shield-7"></i>
                                                <span>B2C Hosting </span>
                                                <b>Pastikan selalu website bisnis kamu tetap nyaman bila diakses banyak visitor.</b>
                                            </a>

                                            <a class="col-md-2" href="cloud-hosting.html">
                                                <i class="flaticon-server-3"></i>
                                                <span>Email Pribadi</span>
                                                <b>Bangun Kredibilitas Brand lebih Profesional dengan Layanan Email Hosting Murah</b>
                                            </a>
                                            <a class="col-md-2" href="cloud-hosting.html">
                                                <i class="flaticon-server-3"></i>
                                                <span>Email Bisnis</span>
                                                <b>Dengan Email Bisnis, kirim dan simpan file dengan biaya yang lebih terjangkau</b>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </li>



                            <li class="nav-item mega-dropdown">
                                <a class="nav-link dropdown" href="#" id="megadrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Domain & License <span class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="megadrop">
                                    <div class="price-mega-menu-home">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 banner-hosting-menu">
                                                <h5>start you<br> mini project now</h5>
                                                <p>with our mini hosting palns you will have the power to start your project</p>
                                                <a href="#">learn more</a>
                                                <span>from $3.55</span>
                                            </div>
                                            <div class="col-md-8 plans-hosting-menu">
                                                <h5>our hosting plans</h5>
                                                <div class="row justify-content-left">
                                                    <div class="col-md-4 megamenu-plans">
                                                        <h4 class="price-title">basic</h4>
                                                        <span class="price-price">$3.55 <i>/monthly</i></span>
                                                        <p class="price-text">with our mini hosting palns you will have the power to start your project</p>
                                                        <ul class="megamenu-plans-li">
                                                            <li><i class="fas fa-check"></i> unlimated <b>panwdith</b></li>
                                                            <li><i class="fas fa-check"></i> unlimated <b>database</b></li>
                                                            <li><i class="fas fa-check"></i> unlimated <b>space</b></li>
                                                            <li class="not-included"><i class="fas fa-times"></i> free <b>domain</b></li>
                                                        </ul>
                                                        <a class="megamenu-plans-order" href="#">order now</a>
                                                    </div>

                                                    <div class="col-md-4 megamenu-plans">
                                                        <h4 class="price-title">standard</h4>
                                                        <span class="price-price">$5.11 <i>/monthly</i></span>
                                                        <p class="price-text">with our mini hosting palns you will have the power to start your project</p>
                                                        <ul class="megamenu-plans-li">
                                                            <li><i class="fas fa-check"></i> unlimated <b>panwdith</b></li>
                                                            <li><i class="fas fa-check"></i> unlimated <b>database</b></li>
                                                            <li><i class="fas fa-check"></i> unlimated <b>space</b></li>
                                                            <li class="not-included"><i class="fas fa-times"></i> free <b>domain</b></li>
                                                        </ul>
                                                        <a class="megamenu-plans-order" href="#">order now</a>
                                                    </div>

                                                    <div class="col-md-4 megamenu-plans no-border">
                                                        <h4 class="price-title">premier</h4>
                                                        <span class="price-price">$7.22 <i>/monthly</i></span>
                                                        <p class="price-text">with our mini hosting palns you will have the power to start your project</p>
                                                        <ul class="megamenu-plans-li">
                                                            <li><i class="fas fa-check"></i> unlimated <b>panwdith</b></li>
                                                            <li><i class="fas fa-check"></i> unlimated <b>database</b></li>
                                                            <li><i class="fas fa-check"></i> unlimated <b>space</b></li>
                                                            <li><i class="fas fa-check"></i> free <b>domain</b></li>
                                                        </ul>
                                                        <a class="megamenu-plans-order" href="#">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tooltip" data-placement="bottom" title="search" class="search-headr" href="#"><img src="main/img/svgs/search.svg" alt="" /></a>
                            </li>

                        </ul>
                        <!-- end navbar -->

                    </div>
                    <!-- end collapse navbar -->

                    <!-- start header account  -->
                    <ul class="account-place-header-nav">
                        <li class="nav-item dropdown">
                            <a data-toggle="dropdown" aria-haspopup="true" id="customarea" aria-expanded="false" class="accouting-h dropdown-toggle" href="#">
                                <img src="main/img/svgs/avatar.svg" alt="" /></a>
                            <div class="dropdown-menu login-drop-down-header" aria-labelledby="customarea">

                                <form action="#" data-form="validate">

                                    <div class="form-group">
                                        <input type="email" name="username" placeholder="Your Email" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                                    </div>

                                    <p class="help-block"><a href="#">Forgot Your Password?</a> <a href="#">Sign up</a></p>
                                    <button type="submit" class="btn btn-block btn-default text-uppercase">Login</button>

                                </form>

                            </div>
                        </li>
                    </ul>
                    <!-- end header account  -->

                </nav>
            </div><!-- end container -->
        </div><!-- end main header section -->

        <main class="inner cover header-heeadline-title mb-auto">
            <!-- start main header slider -->

            <div class="owl-carousel owl-theme main-header-slider">
                <div class="item">
                    <h5><span class="blok-on-phon">we give <br> Best</span> <span id="typed"></span></h5>
                    <p>We make sure your website is fast, secure & always up</p>

                    <div class="container">

                        <div class="row justify-content-center">
                            <!-- start row -->
                            <form class="form-domain-home-stwo col-md-10">
                                <!-- domain search form -->
                                <div class="row justify-content-left">
                                    <!-- start row -->
                                    <div class="col-md-7 input-group">
                                        <!-- col -->
                                        <input type="text" class="form-control input-search-text" required><!-- name input -->
                                        <span class="input-group-prepend">Enter your domain name</span>
                                    </div><!-- end col -->

                                    <div class="col-md-2 input-group">
                                        <!-- col -->
                                        <input type="text" class="form-control input-search-dlt" required><!-- ltd input -->
                                        <span class="input-group-prepend">com ?</span>
                                    </div><!-- end col -->

                                    <div class="col-md-3 input-group">
                                        <!-- col -->
                                        <button type="submit" class="btn btn-block btn-default text-uppercase btn-domain-check">check domain</button>
                                    </div><!-- end col -->
                                    <div class="domain-price-homepage mr-auto">
                                        <!-- domain ltds -->
                                        <a data-toggle="tooltip" data-placement="bottom" title="$8.99">
                                            <img src="main/img/domain/black/com.png" alt="domain"><!-- domain name -->
                                        </a>

                                        <a data-toggle="tooltip" data-placement="bottom" title="$8.99">
                                            <img src="main/img/domain/black/net.png" alt="domain"><!-- domain name -->
                                        </a>

                                        <a data-toggle="tooltip" data-placement="bottom" title="$8.99">
                                            <img src="main/img/domain/black/org.png" alt="domain"><!-- domain name -->
                                        </a>

                                        <a data-toggle="tooltip" data-placement="bottom" title="$8.99" class="no-phon-dsply">
                                            <img src="main/img/domain/black/store.png" alt="domain"><!-- domain name -->
                                        </a>

                                    </div><!-- end domain ltds -->


                                </div><!-- end row -->

                            </form><!-- end domain search form -->



                        </div><!-- end row -->





                    </div>

                </div>
        </main><!-- end main header slider -->
        <div class="mt-auto"></div>
    </div><!-- end header -->

    <section class="first-items-home">
        <!-- section services -->
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-md-4 item-icons">
                    <span class="free-badje">free</span><!-- free badge -->
                    <span class="nomber-overlow"><b>01</b></span><!-- service number -->
                    <i class="icon flaticon-bug color-1"></i><!-- service icon -->
                    <h5>Full Security Team</h5><!-- service title -->
                    <p>Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</p><!-- service text -->
                    <div class="badje-link-footer"><a href="#">see more <i class="far fa-arrow-alt-circle-right"></i> </a></div><!-- service link -->
                </div>

                <div class="col-md-4 item-icons">
                    <span class="nomber-overlow"><b>02</b></span><!-- service number -->
                    <i class="icon flaticon-chip color-2"></i><!-- service icon -->
                    <h5>Analytics</h5>
                    <p>Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</p><!-- service text -->
                    <div class="badje-link-footer"><a href="#">see more <i class="far fa-arrow-alt-circle-right"></i> </a></div><!-- service link -->
                </div>

                <div class="col-md-4 item-icons">
                    <span class="nomber-overlow"><b>03</b></span><!-- service number -->
                    <i class="icon flaticon-063-flashlight color-3"></i><!-- service icon -->
                    <h5>Analytics</h5><!-- service title -->
                    <p>Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</p><!-- service text -->
                    <div class="badje-link-footer"><a href="#">see more <i class="far fa-arrow-alt-circle-right"></i> </a></div><!-- service link -->
                </div>

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section services -->



    <section class="second-items-home">
        <!-- start second hosting plans -->
        <div class="container">
            <!-- start container -->
            <div class="tittle-simple-one">
                <h5>Chose your best pricing plan<span>you want custom hosting plan.<br> No hidden charge.</span></h5>
            </div><!-- title -->

            <div class="mr-tp-70 mr-bt-50">
                <div class="row">
                    <div id="monthly-yearly-chenge" class="col align-self-start">
                        <!-- start plan price changer -->
                        <a class="active monthly-price">monthly price</a>
                        <a class="yearli-price">yearly price</a>
                    </div>
                    <!-- end plan price changer -->

                    <div class="col align-self-end plan-contact-support-button text-right">
                        <!-- start plan support -->
                        <a href="#"><i class="far fa-life-ring"></i> 00123 456 78 90 11</a>
                    </div>
                    <!-- start plan support -->
                </div>

                <div class="row justify-content-left">
                    <!--------------------------------------------- first plan --------------------------------------------->
                    <div class="col-md-4">
                        <!-- tree steps hosting plan -->
                        <div class="tree-steps-hosting-plans first">
                            <div class="tree-steps-hosting-plans-header">
                                <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
                                <h5 class="tree-steps-hosting-plans-title">standard plan <small>for small projects</small></h5>
                                <!-- steps hosting plan title -->
                                <span class="tree-steps-hosting-plans-price monthly">
                                    <!-- steps hosting plan price -->
                                    <b class="monthly">$12<small>/month</small></b>
                                    <b class="yearly">$133<small>/year</small></b>
                                </span>
                                <!-- steps hosting plan price -->
                            </div>

                            <div id="first-plan-hosting-steps-content" class="tree-steps-hosting-plans-body first-plan-hosting-steps">
                                <!-- steps hosting plan body -->
                                <div class="loader-tree-steps-hosting-plans-body">
                                    <!-- steps hosting plan loader -->
                                    <i class="fas fa-circle-notch rotate360icon"></i>
                                </div>
                                <!-- end steps hosting plan loader -->
                                <ul class="tree-steps-hosting-plans-list">
                                    <!-- steps hosting plan features list -->
                                    <li class="checked">2 TB of space</li>
                                    <li class="checked">unlimited bandwidth</li>
                                    <li class="checked">full backup systems</li>
                                    <li class="checked">free domain</li>
                                    <li class="checked">unlimited database</li>
                                    <li class="not-checked">live chat support</li>
                                    <li class="not-checked">phone support</li>
                                </ul>
                                <!-- end steps hosting plan features list -->

                                <div class="tree-steps-hosting-plans-payment">
                                    <!-- steps hosting plan login form -->

                                    <!-- back to previous steps button -->
                                    <span id="first-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">
                                        <span class="first-stright"></span>
                                        <span class="second-stright"></span>
                                    </span>
                                    <!-- end back to previous steps button -->

                                    <h5 class="tree-steps-hosting-plans-payment-title">payment <small>please login to your account to continue </small></h5>

                                    <form class="tree-steps-hosting-plans-login-form" novalidate>
                                        <div class="col-md-12 mb-3">
                                            <label for="firstName">First name</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="password">password</label>
                                            <input type="password" class="form-control" id="password" placeholder="" value="" required>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><small>Remember Me</small></label>
                                        </div>

                                    </form>

                                </div>
                                <!-- end steps hosting plan login form -->

                            </div>
                            <!-- end steps hosting plan body -->

                            <div class="tree-steps-hosting-plans-footer text-center">
                                <!-- start steps hosting plan footer -->
                                <a id="first-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                                    <!-- go to previous next step button -->
                                    <span class="first-step-hosting-text">
                                        <small>next step</small>
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                    <!-- end go to previous next step button -->

                                    <!-- login button -->
                                    <span class="second-step-hosting-text">
                                        login
                                    </span>
                                    <!-- end login button -->
                                </a>

                            </div>
                            <!-- end steps hosting plan footer -->

                        </div>
                    </div>

                    <!--------------------------------------------- second plan --------------------------------------------->
                    <div class="col-md-4">
                        <!-- tree steps hosting plan -->
                        <div class="tree-steps-hosting-plans second">
                            <span class="tree-steps-hosting-plans-best">best plan</span>
                            <div class="tree-steps-hosting-plans-header">
                                <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
                                <h5 class="tree-steps-hosting-plans-title">advenced plan <small>for small projects</small></h5>
                                <!-- steps hosting plan title -->
                                <span class="tree-steps-hosting-plans-price monthly">
                                    <!-- steps hosting plan price -->
                                    <b class="monthly">$15<small>/month</small></b>
                                    <b class="yearly">$140<small>/year</small></b>
                                </span>
                                <!-- steps hosting plan price -->
                            </div>

                            <div id="second-plan-hosting-steps-content" class="tree-steps-hosting-plans-body">
                                <!-- steps hosting plan body -->
                                <div class="loader-tree-steps-hosting-plans-body">
                                    <!-- steps hosting plan loader -->
                                    <i class="fas fa-circle-notch rotate360icon"></i>
                                </div>
                                <!-- end steps hosting plan loader -->
                                <ul class="tree-steps-hosting-plans-list">
                                    <!-- steps hosting plan features list -->
                                    <li class="checked">2 TB of space</li>
                                    <li class="checked">unlimited bandwidth</li>
                                    <li class="checked">full backup systems</li>
                                    <li class="checked">free domain</li>
                                    <li class="checked">unlimited database</li>
                                    <li class="checked">live chat support</li>
                                    <li class="not-checked">phone support</li>
                                </ul>
                                <!-- end steps hosting plan features list -->

                                <div class="tree-steps-hosting-plans-payment">
                                    <!-- steps hosting plan login form -->

                                    <!-- back to previous steps button -->
                                    <span id="second-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">
                                        <span class="first-stright"></span>
                                        <span class="second-stright"></span>
                                    </span>
                                    <!-- end back to previous steps button -->

                                    <h5 class="tree-steps-hosting-plans-payment-title">payment <small>choose your payment method </small></h5>

                                    <form class="tree-steps-hosting-plans-login-form payment-method-form" novalidate="">
                                        <div class="row with-enic-padding">

                                            <div class="custom-control custom-radio col-md-6 mb-3">
                                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                                <label class="custom-control-label" for="paypal"><img src="main/img/demo/paypal.png" alt="" /></label>
                                            </div>

                                            <div class="custom-control custom-radio col-md-6 mb-3">
                                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                                <label class="custom-control-label" for="credit"><img src="main/img/demo/card.png" alt="" /></label>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row with-enic-padding-twni">
                                            <div class="col-md-12 mb-3">
                                                <label for="cc-number">Credit card number</label>
                                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="row with-enic-padding-twni">
                                            <div class="col-md-4 mb-3">
                                                <label for="cc-expiration">Expiration</label>
                                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cc-expiration">CVV</label>
                                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <!-- end steps hosting plan login form -->

                            </div>
                            <!-- end steps hosting plan body -->

                            <div class="tree-steps-hosting-plans-footer text-center">
                                <!-- start steps hosting plan footer -->

                                <a id="second-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                                    <!-- go to previous next step button -->
                                    <span class="first-step-hosting-text">
                                        <small>next step</small>
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                    <!-- end go to previous next step button -->

                                    <!-- login button -->
                                    <span class="second-step-hosting-text">
                                        checkout
                                    </span>
                                    <!-- end login button -->
                                </a>

                            </div>
                            <!-- end steps hosting plan footer -->

                        </div>
                    </div>

                    <!--------------------------------------------- third plan --------------------------------------------->
                    <div class="col-md-4">
                        <!-- tree steps hosting plan -->
                        <div class="tree-steps-hosting-plans third">
                            <div class="tree-steps-hosting-plans-header">
                                <i class="fas fa-fire tree-steps-hosting-plans-icon"></i>
                                <h5 class="tree-steps-hosting-plans-title">entreprise plan <small>for big projects</small></h5>
                                <!-- steps hosting plan title -->
                                <span class="tree-steps-hosting-plans-price monthly">
                                    <!-- steps hosting plan price -->
                                    <b class="monthly">$19<small>/month</small></b>
                                    <b class="yearly">$199<small>/year</small></b>
                                </span>
                                <!-- steps hosting plan price -->
                            </div>

                            <div id="third-plan-hosting-steps-content" class="tree-steps-hosting-plans-body">
                                <!-- steps hosting plan body -->
                                <div class="loader-tree-steps-hosting-plans-body">
                                    <!-- steps hosting plan loader -->
                                    <i class="fas fa-circle-notch rotate360icon"></i>
                                </div>
                                <!-- end steps hosting plan loader -->
                                <ul class="tree-steps-hosting-plans-list">
                                    <!-- steps hosting plan features list -->
                                    <li class="checked">2 TB of space</li>
                                    <li class="checked">unlimited bandwidth</li>
                                    <li class="checked">full backup systems</li>
                                    <li class="checked">free domain</li>
                                    <li class="checked">unlimited database</li>
                                    <li class="checked">live chat support</li>
                                    <li class="checked">phone support</li>
                                </ul>
                                <!-- end steps hosting plan features list -->

                                <div class="tree-steps-hosting-plans-payment">
                                    <!-- steps hosting plan login form -->

                                    <!-- back to previous steps button -->
                                    <span id="third-plan-hosting" data-toggle="tooltip" data-placement="bottom" title="previous step" class="tree-steps-hosting-plans-footer-btn-back step-two-hosting">
                                        <span class="first-stright"></span>
                                        <span class="second-stright"></span>
                                    </span>
                                    <!-- end back to previous steps button -->

                                    <h5 class="tree-steps-hosting-plans-payment-title">error <small>this offre was ended </small></h5>

                                    <div class="tree-steps-hosting-plans-error">
                                        <i class="far fa-times-circle"></i>
                                        <p>we are sorry, this offre was ended </p>
                                    </div>

                                </div>
                                <!-- end steps hosting plan login form -->

                            </div>
                            <!-- end steps hosting plan body -->

                            <div class="tree-steps-hosting-plans-footer text-center">
                                <!-- start steps hosting plan footer -->

                                <a id="third-plan-hosting-steps" class="tree-steps-hosting-plans-footer-btn first-step-hosting">
                                    <!-- go to previous next step button -->
                                    <span class="first-step-hosting-text">
                                        <small>next step</small>
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                    <!-- end go to previous next step button -->

                                    <!-- login button -->
                                    <span class="second-step-hosting-text">
                                        contact us
                                    </span>
                                    <!-- end login button -->
                                </a>

                            </div>
                            <!-- end steps hosting plan footer -->

                        </div>
                    </div>

                </div>
            </div>
        </div><!-- end container -->
    </section><!-- end second hosting plans -->

    <section class="our-pertners">
        <!-- starts our pertners section -->
        <div class="container">
            <!-- CONTAINER -->
            <h2 class="d-none">our pertners</h2>
            <div class="owl-carousel pertners-carousel owl-theme">
                <!-- start owl carousel -->
                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo1.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo2.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo3.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo4.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo5.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo1.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo2.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo3.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo4.png" alt="" /> </a>
                </div><!-- end item -->

                <div class="item">
                    <!-- start item -->
                    <a href="#"> <img src="main/img/pertners/logo5.png" alt="" /> </a>
                </div><!-- end item -->

            </div><!-- end owl carousel -->

        </div><!-- end CONTAINER -->
    </section><!-- end our pertners section -->



    <section class="perlex-efect-section parallax-window" data-parallax="scroll" data-image-src="main/img/demo/bg.jpeg">
        <!-- start parallax section -->
        <span class="perlex-hidden-iverlow"></span>
        <div class="container">
            <!-- start container -->
            <div class="row justify-content-left">
                <!-- start row -->
                <div class="col-md-5">
                    <div class="video-section-text-place">
                        <span class="over-ole-grandient-orl"></span>
                        <h5>Chose your best pricing plan</h5><!-- title -->
                        <span class="post-category">hosting</span> <span class="post-date">19 march 2018</span><!-- category -->
                        <p>Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</p><!-- text -->
                        <a href="#">read more</a><!-- link -->
                    </div>
                </div>

                <div class="col-md-7 video-section-play-place">
                    <!-- video popup link -->
                    <a class="video-btn" data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#videomodal" href="#"><i class="fas fa-play"></i> <span class="first-text"><b>play</b> video</span> <span class="second-text"><b>click</b> here</span></a>
                </div><!-- end popup link -->
            </div><!-- end row -->

        </div><!-- end container -->
    </section><!-- end parallax section -->



    <section class="our-sevices-section">
        <!-- start our full secvices -->
        <div class="container">
            <div class="tittle-simple-one">
                <!-- start title -->
                <h5>Chose your best pricing plan<span>you want custom hosting plan.<br> No hidden charge.</span></h5>
            </div><!-- end title -->
        </div><!-- end container -->

        <ul id="oursevices" class="carousel carousel-nav-services">
            <!-- our full secvices links -->

            <li class="carousel-cell">
                <!-- start item -->
                <a class="nav-link">
                    <i class="flaticon-063-atomic"></i>
                    <span class="title-tabs-of">Domains</span><!-- title -->
                </a>
            </li><!-- end item -->

            <li class="carousel-cell">
                <!-- start item -->
                <a class="nav-link">
                    <i class="flaticon-063-circuit"></i>
                    <span class="title-tabs-of">web hosting</span><!-- title -->
                </a>
            </li><!-- end item -->

            <li class="carousel-cell">
                <!-- start item -->
                <a class="nav-link">
                    <i class="flaticon-063-smartphone"></i>
                    <span class="title-tabs-of">resslers</span><!-- title -->
                </a>
            </li><!-- end item -->

            <li class="carousel-cell">
                <!-- start item -->
                <a class="nav-link">
                    <i class="flaticon-063-ufo"></i>
                    <span class="title-tabs-of">support</span><!-- title -->
                </a>
            </li><!-- end item -->

            <li class="carousel-cell">
                <!-- start item -->
                <a class="nav-link">
                    <i class="flaticon-063-test-tube"></i>
                    <span class="title-tabs-of">cloud hosting</span><!-- title -->
                </a>
            </li><!-- end item -->

        </ul><!-- end our full secvices links -->



        <div class="carousel carousel-main-services">
            <!-- tabs show -->
            <div class="carousel-cell">
                <!-- item -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-tab-content-algo text-center">
                            <div class="text-absoo">
                                <h5>Shared Web Hosting is your next powerful thing.</h5><!-- title -->
                                <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p><!-- text -->
                                <a href="#">GET STARTED NOW</a><!-- link -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end item -->

            <div class="carousel-cell">
                <!-- item -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <img src="main/img/demo/server.jpeg" alt="" />
                        </div>
                        <div class="col-md-6 text-tab-content-algo">
                            <div class="text-absoo">
                                <h5>Shared Web Hosting is your next powerful thing.</h5><!-- title -->
                                <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p><!-- text -->
                                <a href="#">GET STARTED NOW</a><!-- link -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end item -->

            <div class="carousel-cell">
                <!-- item -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5 text-tab-content-algo">
                            <div class="text-absoo">
                                <h5>Shared Web Hosting is your next powerful thing.</h5><!-- title -->
                                <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p><!-- text -->
                                <a href="#">GET STARTED NOW</a><!-- link -->
                            </div>
                        </div>

                        <div class="col-md-5">
                            <img src="main/img/demo/server.jpeg" alt="" />
                        </div>

                    </div>
                </div>
            </div><!-- end item -->

            <div class="carousel-cell">
                <!-- item -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <img src="main/img/demo/server.jpeg" alt="" />
                        </div>
                        <div class="col-md-6 text-tab-content-algo">
                            <div class="text-absoo">
                                <h5>Shared Web Hosting is your next powerful thing.</h5><!-- title -->
                                <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p><!-- text -->
                                <a href="#">GET STARTED NOW</a><!-- link -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end item -->

            <div class="carousel-cell">
                <!-- item -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5 text-tab-content-algo">
                            <div class="text-absoo">
                                <h5>Shared Web Hosting is your next powerful thing.</h5><!-- title -->
                                <p>With our one click installer tool, available on every Web Hosting plan, you can create any type of website: blog, forum, CMS, wiki, photo gallery, E-commerce store, and so much more! No more thinking for databases, downloading and uploading script files on your own, and other technical work.</p><!-- text -->
                                <a href="#">GET STARTED NOW</a><!-- link -->
                            </div>
                        </div>

                        <div class="col-md-5">
                            <img src="main/img/demo/server.jpeg" alt="" />
                        </div>

                    </div>
                </div>
            </div><!-- end item -->

        </div><!-- end tabs show -->
    </section><!-- end our full secvices -->



    <section class="homepage-domain-section padding-80-100-100">

        <div class="container">


            <div class="row justify-content-center domain-homepage-anouncement-hero">
                <!-- row -->
                <div class="col-md-6 mt-auto mb-auto">
                    <!-- col -->
                    <h4 class="domain-homepage-anouncement-title">Why do you need a <br>domain name?</h4><!-- title -->
                    <p class="domain-homepage-anouncement-sub-title"> The most successful businesses use the same set of words and images in all customer touchpoints – on their website, in their emails and order confirmations, on their signs, etc.</p><!-- text -->
                    <p class="domain-homepage-anouncement-sub-title-two"> This is branding at its simplest. And the digital pieces of your brand all spring from your domain name.</p><!-- text -->
                    <br>

                    <!--------------------------------------------- first domain anoncment order --------------------------------------------->

                    <!-- The domain anoncment order -->
                    <div id="fisrt-domains-offre-content" class="domain-homepage-anouncement-speacial">
                        <span class="domain-tci">.tel</span>
                        <!-- The domain anoncment name -->
                        <a id="fisrt-domains-offre" class="domain-tci-order"><span>register</span></a>
                        <!-- The domain anoncment register button -->
                        <div class="domain-tci-buttons">
                            <!-- The domain anoncment finel buttons -->
                            <i id="fisrt-domains" data-toggle="tooltip" data-placement="top" title="add to cart" class="far fa-check-circle domain-tci-check"></i>
                            <i id="fisrt" data-toggle="tooltip" data-placement="top" title="cancel order" class="far fa-times-circle domain-tci-cancel"></i>
                        </div>
                        <!-- end domain anoncment finel buttons -->
                        <form class="domain-homepage-anouncement-speacial-form">
                            <!-- The domain anoncment order form -->
                            <input placeholder="entre your domain name" type="text" class="form-control input-search-text-special" required="">
                        </form>
                        <!-- end domain anoncment order form -->

                        <div class="domain-tci-added-to-card-mesage">
                            <!-- The domain anoncment success message -->
                            <span>this domain added successfully to your cart <a href="#">checkout</a></span>
                        </div>
                        <!-- end domain anoncment success message -->
                    </div>
                    <!-- end domain anoncment order -->

                    <!--------------------------------------------- second domain anoncment order --------------------------------------------->

                    <div id="second-domains-offre-content" class="domain-homepage-anouncement-speacial">
                        <span class="domain-tci">.one</span>
                        <!-- The domain anoncment name -->
                        <a id="second-domains-offre" class="domain-tci-order"><span>register</span></a>
                        <!-- The domain anoncment register button -->
                        <div class="domain-tci-buttons">
                            <!-- The domain anoncment finel buttons -->
                            <i id="second-domains" data-toggle="tooltip" data-placement="top" title="add to cart" class="far fa-check-circle domain-tci-check"></i>
                            <i id="second" data-toggle="tooltip" data-placement="top" title="cancel order" class="far fa-times-circle domain-tci-cancel"></i>
                        </div>
                        <!-- end domain anoncment finel buttons -->
                        <form class="domain-homepage-anouncement-speacial-form">
                            <!-- The domain anoncment order form -->
                            <input placeholder="entre your domain name" type="text" class="form-control input-search-text-special" required="">
                        </form>
                        <!-- end domain anoncment order form -->

                        <div class="domain-tci-added-to-card-mesage">
                            <!-- The domain anoncment success message -->
                            <span>this domain added successfully to your cart <a href="#">checkout</a></span>
                        </div>
                        <!-- end domain anoncment success message -->
                    </div>
                    <!-- end domain anoncment order -->

                    <!--------------------------------------------- third domain anoncment order --------------------------------------------->

                    <div id="third-domains-offre-content" class="domain-homepage-anouncement-speacial">
                        <span class="domain-tci">.hosting</span>
                        <!-- The domain anoncment name -->
                        <a id="third-domains-offre" class="domain-tci-order"><span>register</span></a>
                        <!-- The domain anoncment register button -->
                        <div class="domain-tci-buttons">
                            <!-- The domain anoncment finel buttons -->
                            <i id="third-domains" data-toggle="tooltip" data-placement="top" title="add to cart" class="far fa-check-circle domain-tci-check"></i>
                            <i id="third" data-toggle="tooltip" data-placement="top" title="cancel order" class="far fa-times-circle domain-tci-cancel"></i>
                        </div>
                        <!-- end domain anoncment finel buttons -->
                        <form class="domain-homepage-anouncement-speacial-form">
                            <!-- The domain anoncment order form -->
                            <input placeholder="entre your domain name" type="text" class="form-control input-search-text-special" required="">
                        </form>
                        <!-- end domain anoncment order form -->

                        <div class="domain-tci-added-to-card-mesage">
                            <!-- The domain anoncment success message -->
                            <span>this domain added successfully to your cart <a href="#">checkout</a></span>
                        </div>
                        <!-- end domain anoncment success message -->
                    </div>
                    <!-- end domain anoncment order -->

                </div><!-- end col -->

                <div class="col-md-6 row justify-content-center phone-no-sidepadding">
                    <div class="col-md-6">
                        <!-- col -->
                        <div class="domain-homepage-anouncement-box">
                            <!-- domain features box -->
                            <div class="domain-homepage-anouncement-box-img">
                                <img src="main/img/svgs/book.svg" alt="" />
                            </div>
                            <h5>Stake your claim</h5>
                            <p>Registering domains related to your big idea or business name keeps others from using those names to pull traffic away from your website.</p>

                        </div><!-- end domain features box -->

                        <div class="domain-homepage-anouncement-box">
                            <!-- domain features box -->
                            <div class="domain-homepage-anouncement-box-img">
                                <img src="main/img/svgs/ring.svg" alt="" />
                            </div>
                            <h5>Take control</h5>
                            <p>With a domain name, you can send customers, friends and prospects wherever you want – whether that’s a website, blog, social page or storefront.</p>

                        </div><!-- end domain features box -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <!-- col -->
                        <div class="domain-homepage-anouncement-box margin-top-150">
                            <!-- domain features box -->
                            <div class="domain-homepage-anouncement-box-img">
                                <img src="main/img/svgs/dollar.svg" alt="" />
                            </div>
                            <h5>Protect your rights</h5>
                            <p>Your domain gives you an exclusive piece of digital real estate that cannot be used by anyone else as long as it’s registered to you.</p>

                        </div><!-- end domain features box -->

                    </div><!-- end col -->

                </div><!-- end row -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end domain search homepage -->



    <section class="counter-section">
        <!-- start counter section -->
        <div class="container">
            <div class="counter-middle-icon">
                <span class="icon-counter-sid"><i class="flaticon-063-molecules-1"></i></span><!-- icon -->
                <h2 class="icon-counter-sid-title">our company <b>funny facts</b></h2><!-- title -->
            </div>
            <div class="row justify-content-center">
                <!-- row -->
                <div class="col-md-4 counter-number-tibo"><i class="flaticon-database-8"></i> <span><small class="counter">99.99</small>%</span> <b>off our server working now</b></div><!-- counter -->
                <div class="col-md-4 counter-number-tibo pad-top-190"><i class="flaticon-plug"></i><span> <small class="counter">122</small></span><b>new website this week</b></div><!-- counter -->
                <div class="col-md-4 counter-number-tibo"><i class="flaticon-shield-5"></i><span> <small class="counter">973.07</small>$</span> <b>checkout this day</b></div><!-- counter -->
            </div><!-- end row -->

        </div><!-- end container -->
    </section><!-- end counter section -->




    <section class="server-place-section">
        <!-- start our servers place section -->
        <div class="container zindextow">
            <!-- start container -->
            <div class="row justify-content-center">
                <!-- start row -->
                <div class="col-md-5 row justify-content-center text-reve-map-place">
                    <div class="col-md-6">
                        <h5>brazil</h5><!-- title -->
                        <p><span>address</span> tchuk slov 133, contral park,brazil</p><!-- address -->
                        <p><span>phone</span>00213 123-45-67-89
                            <!-- phones -->
                            <br>00213 123-45-67-89
                        </p><!-- phones -->
                        <p><span>email</span> support@coodiv.net</p><!-- email -->
                    </div>

                    <div class="col-md-6">
                        <h5>paris</h5><!-- title -->
                        <p><span>address</span> tchuk slov 133, contral park,paris</p><!-- address -->
                        <p><span>phone</span>00213 123-45-67-89
                            <!-- phones -->
                            <br>00213 123-45-67-89
                        </p><!-- phones -->
                        <p><span>email</span> support@coodiv.net</p><!-- email -->
                    </div>
                </div>

                <div class="col-md-7">
                    <!-- col -->
                    <div class="map-gene-server-place">
                        <!-- start map place -->
                        <img src="main/img/map/map-world.png" alt="" /><!-- map -->
                        <span data-toggle="tooltip" data-placement="top" title="brazil" style="top: 68%;left: 33%;" class="place"></span>
                        <span data-toggle="tooltip" data-placement="top" title="paris" style="top: 35%;left: 47%;" class="place"></span>
                    </div><!-- end map place -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </Section><!-- end our servers place section -->



    <section class="blog-home-section">
        <!-- start blog section -->
        <div class="container">
            <!-- start container -->

            <div class="tittle-simple-one">
                <h5>The latest news in our blog<span>Lorem Ipsum Dolor Sit Amet Lorem<br> Lorem Ipsum Dolor.</span></h5>
            </div><!-- title -->

            <div class="row justify-content-center blog-items-home">
                <!-- start row -->

                <div class="col-md-4">
                    <!-- col -->
                    <div class="home-blog-te">
                        <!-- blog container -->
                        <div class="post-thumbn parallax-window" style="background: url(main/img/blog/blog4.png) no-repeat center;"></div><!-- post thumbnail -->
                        <div class="post-bodyn">
                            <h5><a href="#">Up and Running With WooCommerce</a></h5><!-- post title -->
                            <p><i class="far fa-calendar"></i>Mars 02,2018</p><!-- post date -->
                        </div>
                    </div><!-- end blog container -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <!-- col -->
                    <div class="home-blog-te">
                        <!-- blog container -->
                        <div class="post-thumbn parallax-window" style="background: url(main/img/blog/blog3.png) no-repeat center;"></div><!-- post thumbnail -->
                        <div class="post-bodyn">
                            <h5><a href="#">Up and Running With WooCommerce</a></h5><!-- post title -->
                            <p><i class="far fa-calendar"></i>Mars 02,2018</p><!-- post date -->
                        </div>
                    </div><!-- end blog container -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <!-- col -->
                    <div class="home-blog-te">
                        <!-- blog container -->
                        <div class="post-thumbn parallax-window" style="background: url(main/img/blog/blog2.png) no-repeat center;"></div><!-- post thumbnail -->
                        <div class="post-bodyn">
                            <h5><a href="#">Up and Running With WooCommerce</a></h5><!-- post title -->
                            <p><i class="far fa-calendar"></i>Mars 02,2018</p><!-- post date -->
                        </div>
                    </div><!-- end blog container -->
                </div><!-- end col -->

            </div><!-- end row -->

        </div><!-- end container -->
    </section><!-- end blog section -->





    <section class="form-contact-home-section">
        <!-- start contact us section -->
        <div class="container">
            <!-- start container -->
            <div class="row justify-content-center">
                <!-- start row -->
                <form class="col-md-8 row justify-content-center form-contain-home" id="ajax-contact" method="post" action="mailer.php">
                    <!-- start form -->
                    <h5>Any Project In Your Mind ?<span>Or Just Say Hello</span></h5><!-- title -->

                    <div id="form-messages"></div><!-- form message -->

                    <div class="col-md-6">
                        <!-- start col -->
                        <div class="field input-field">
                            <input class="form-contain-home-input" type="text" id="name" name="name" required><!-- input -->
                            <span class="input-group-prepend">entre your name</span><!-- label -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <!-- start col -->
                        <div class="field input-field">
                            <input class="form-contain-home-input" type="email" id="email" name="email" required><!-- input -->
                            <span class="input-group-prepend">entre your email</span><!-- label -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-12">
                        <!-- start col -->
                        <div class="field input-field">
                            <textarea class="form-contain-home-input" id="message" name="message" required></textarea><!-- textarea -->
                            <span class="input-group-prepend">entre your message</span><!-- label -->
                        </div>
                    </div><!-- end col -->

                    <div class="btn-holder-contect">
                        <button type="submit">Send</button><!-- submit button -->
                    </div>

                </form><!-- end form -->



            </div><!-- end container -->
        </div><!-- end container -->
    </section><!-- end contact us section -->

    <section class="footer-coodiv-thm pding-200">
        <!-- start footer section -->
        <div class="container">
            <!-- start container -->
            <div class="row justify-content-center">
                <!-- start row -->

                <div class="col-md-4">
                    <!-- col -->
                    <a class="footer-brand" href="#">
                        <img src="main/img/header/logo.png" alt="">
                    </a>

                    <a class="footer-contact-a-hm"><i class="fas fa-life-ring"></i> 00213-123-45-67-89</a> <!-- phone nubmer -->
                    <a class="footer-contact-a-hm"><i class="fas fa-microphone"></i> support@coodiv.net</a> <!-- email -->
                    <a class="footer-contact-a-hm"><i class="fas fa-map-marker-alt"></i> 28 Green Tower, Central City , New York City, USA</a> <!-- address -->
                </div><!-- end col -->

                <div class="col-md-2 quiq-links-footer-mb-st">
                    <!-- col -->
                    <h5 class="footer-title-simple">Quick Links</h5><!-- title -->
                    <ul class="main-menu-footer-mn">
                        <li><a href="index.html">homepage</a></li><!-- link -->
                        <li><a href="about-us.html">about us</a></li><!-- link -->
                        <li><a href="domain-search.html">domains</a></li><!-- link -->
                        <li><a href="reseller-hosting.html">reseller hosting</a></li><!-- link -->
                        <li><a href="web-hosting.html">web-hosting</a></li><!-- link -->
                    </ul>
                </div><!-- end col -->

                <div class="col-md-2 quiq-links-footer-mb-st">
                    <!-- col -->
                    <h5 class="footer-title-simple">About Us</h5><!-- title -->
                    <ul class="main-menu-footer-mn">
                        <li><a href="knowledgebase.html">knowledgebase</a></li><!-- link -->
                        <li><a href="help-center.html">help-center</a></li><!-- link -->
                        <li><a href="404.html">404 page</a></li><!-- link -->
                        <li><a href="blog.html">blog</a></li><!-- link -->
                        <li><a href="contact.html">contact</a></li><!-- link -->
                    </ul>
                </div><!-- end col -->


                <div class="col-md-3 stay-in-tch-footer-mb-st">
                    <!-- col -->
                    <h5 class="footer-title-simple">Stay In Touch</h5><!-- title -->
                    <form class="form-contain-home-subscribe">
                        <!-- subscribe form -->
                        <input type="email" id="email-subscribe" name="email-subscribe" placeholder="entre your email please" required>
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form><!-- end subscribe form -->

                    <div class="footer-social-links">
                        <!-- social icons -->
                        <a class="facebookcc" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="twittercc" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="googlecc" href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a class="dribbblecc" href="#"><i class="fab fa-dribbble"></i></a>
                    </div><!-- end social icons -->
                    <p class="copyright-footer-p">© 2018 Coodiv. Made with Love in Algeria.</p><!-- copyright text -->

                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end footer section -->


    <!------------------- JavaScript ------------------->

    <!-- jquery -->
    <script src="main/js/jquery.min.js"></script>
    <!-- popper JavaScript -->
    <script src="main/js/popper.min.js"></script>
    <!-- bootstrap JavaScript -->
    <script src="main/js/bootstrap.min.js"></script>
    <!-- waypoints JavaScript -->
    <script src="main/js/waypoints.min.js"></script>
    <!-- counterup JavaScript -->
    <script src="main/js/jquery.counterup.min.js"></script>
    <!-- particles JavaScript -->
    <script src="main/js/particles-code.js"></script>
    <!-- typed JavaScript -->
    <script src="main/js/typed.js"></script>
    <!-- smoothscroll JavaScript -->
    <script src="main/js/smoothscroll.js"></script>
    <!-- carousel JavaScript -->
    <script src="main/owlcarousel/owl.carousel.min.js"></script>
    <!-- parallax JavaScript -->
    <script src="main/js/parallax.min.js"></script>
    <!-- bootstrap offcanvas -->
    <script src="main/js/bootstrap.offcanvas.min.js"></script>
    <!-- flickity JavaScript -->
    <script src="main/js/flickity.pkgd.min.js"></script>
    <!-- template JavaScript -->
    <script src="main/js/scripts.js"></script>
    <!-- mailer JavaScript -->
    <script src="main/js/mailer.js"></script>
    <!-- touchSwipe JavaScript -->
    <script src="main/js/jquery.touchSwipe.min.js"></script>
    <!-- countdown JavaScript -->
    <script src="main/js/jquery.countdown.min.js"></script>
    <!-- modal video JavaScript -->
    <script src="main/js/modal-video.min.js"></script>
    <!-- particles JavaScript -->
    <script src="main/js/particles.js"></script>
    <!-- filters JavaScript -->
    <script src="main/js/mixitup.min.js"></script>
    <!-- video background JavaScript -->
    <script src="main/js/video-bg.js"></script>

    <!------------------- End javaScript ------------------->



</body>

</html>