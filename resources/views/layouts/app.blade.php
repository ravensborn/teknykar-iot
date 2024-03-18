<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teknykar: Smart solutions for your home and business.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Teknykar: Smart solutions for your home and business.">
    <meta property="og:site_name" content="Teknykar: Smart solutions for your home and business"/>
    <meta property="og:title" content="Teknykar: Smart solutions for your home and business"/>
    <meta property="og:description" content="Teknykar: Smart solutions for your home and business."/>
    <meta property="og:image" content="{{ asset('images/iot.png') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://teknykar.com"/>

    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/responsive.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

</head>
<body>

<div class="boxed_wrapper">

    <header class="top-bar">
        <div class="container">
            <div class="clearfix">
                <div class="col-left float_left">
                    <div id="polyglotLanguageSwitcher" class="">
                        <form action="#">
                            <select id="polyglot-language-options">
                                <option id="en" value="en" selected>English</option>
                            </select>
                        </form>
                    </div>

                    <ul class="top-bar-info">
                        <li><i class="icon-technology"></i>Phone: +964 (750) 380-7676</li>
                        <li><i class="icon-note2"></i>sales@teknykar.com</li>
                    </ul>
                </div>
                <div class="col-right float_right">
                    <ul class="social">
                        <li>Stay Connected: </li>
                        <li><a href="https://www.linkedin.com/company/teknykar-iot"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.facebook.com/teknykar2023"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/teknykar_iot"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <div class="link">
                        <a href="{{ route('contact-us') }}" class="thm-btn">Contact Us</a>
                    </div>
                </div>


            </div>


        </div>
    </header>

    <section class="theme_menu stricky">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="main-logo">
                        <a href="{{ route('home') }}" >

                            <div>
                                <img style="width: 70%; height: auto;" src="{{ asset('images/logo.png') }}" alt="Home">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 menu-column">
                    <nav class="menuzord" id="main_menu">
                        <ul class="menuzord-menu">
                            <li @class(['active' => request()->routeIs('home')])><a href="{{ route('home') }}">Home</a></li>

                            <li><a href="#">Services</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('services.connection') }}">Connection</a></li>
                                    <li><a href="{{ route('services.lns') }}">LNS</a></li>
                                    <li><a href="{{ route('services.mobile-application') }}">Mobile Application</a></li>
                                    <li><a href="{{ route('services.web-application') }}">Web Application</a></li>
                                    <li><a href="{{ route('services.iot-sensors') }}">IOT Sensors</a></li>
                                    <li><a href="{{ route('services.iot-development') }}">IOT Development</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Shop</a>
                                <ul class="dropdown">
                                    <li><a href="https://everythingiot.net">Everything IOT Store</a></li>
                                    <li><a href="https://time-net.net/store">TimeNet Store</a></li>
                                </ul>
                            </li>

                            <li><a href="#">IOT Platform</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('iot-platform.teknykar-platform') }}">Teknykar Platform</a></li>
                                    <li><a href="{{route('iot-platform.teknykar-lns')}}">Teknykar LNS</a></li>
                                </ul>
                            </li>

                            <li>
                                <a @class(['active' => request()->routeIs('about')]) href="{{ route('about') }}">About us</a>
                            </li>

                            <li><a @class(['active' => request()->routeIs('contact-us')]) href="{{ route('contact-us') }}">Contact us</a></li>
                        </ul><!-- End of .menuzord-menu -->
                    </nav> <!-- End of #main_menu -->
                </div>
                <div class="right-column">
                    <div class="right-area">
                        <div class="nav_side_content">
                            <div class="search_option">
                                <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                <form method="GET" action="https://everything-iot.test/store/products" class="dropdown-menu" aria-labelledby="searchDropdown">
                                    <input type="text" placeholder="Search...">
                                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div> <!-- End of .conatiner -->
    </section>

   @yield('content')

    <footer class="main-footer">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-md-12 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <h3 class="footer-title">About Us</h3>

                                    <div class="widget-content">
                                        <div class="text">
                                            <p>At Teknykar, we believe in the transformative power of IoT to revolutionize the way we live, work, and interact with the world around us. Join us on our journey to explore the endless possibilities of IoT technology and unlock a future where everything is connected.</p>
                                        </div>
                                        <div class="link">
                                            <a href="{{ route('about') }}" class="default_link">More About us <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h3 class="footer-title">Our Differences</h3>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li>
                                                <a href="{{ route('differences.business-growth') }}">Business Growth</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('differences.sustainability') }}">Sustainability</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('differences.performance') }}">Performance</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('differences.advanced-analytics') }}">Advanced Analytics</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('differences.customer-insights') }}">Customer Insights</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('differences.organization') }}">Organization</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <h3 class="footer-title">Contact us</h3>
                                    <div class="widget-content">
                                        <ul class="contact-info">
                                            <li><span class="icon-signs"></span>44001, Ankawa Khabat Street, <br>Erbil, KRI</li>
                                            <li><span class="icon-phone-call"></span> Phone: +964 (750) 380-7676</li>
                                            <li><span class="icon-e-mail-envelope"></span>sales@teknykar.com</li>
                                        </ul>
                                    </div>
                                    <ul class="social">
                                        <li><a href="https://www.linkedin.com/company/teknykar-iot"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.facebook.com/teknykar2023"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/teknykar_iot"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <section class="footer-bottom">
            <div class="container">
                <div class="pull-left copy-text">
                    <p>Copyrights © {{ date('Y') }} All Rights Reserved. Powered by  <a href="https://time-net.net"> TimeNet Development Team.</a></p>

                </div><!-- /.pull-right -->
                <div class="pull-right get-text">
                    <ul>
                        <li><a href="{{ route('privacy-and-policy') }}">Privacy & Policy |</a></li>
                        <li><a href="{{ route('terms-and-conditions') }}"> Terms & Conditions</a></li>
                    </ul>
                </div><!-- /.pull-left -->
            </div><!-- /.container -->
        </section>

    </footer>

    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s color2_bg">
        <span class="fa fa-angle-up"></span>
    </button>
    <!-- pre loader  -->
    <div class="preloader"></div>


    <!-- jQuery js -->
    <script src="{{ asset('theme/js/jquery.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    <!-- jQuery ui js -->
    <script src="{{ asset('theme/js/jquery-ui.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('theme/js/owl.carousel.min.js') }}"></script>
    <!-- jQuery validation -->
    <script src="{{ asset('theme/js/jquery.validate.min.js') }}"></script>

    <!-- mixit up -->
    <script src="{{ asset('theme/js/wow.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('theme/js/menuzord.js') }}"></script>

    <!-- revolution slider js -->
    <script src="{{ asset('theme/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('theme/js/revolution.extension.video.min.js') }}"></script>

    <!-- fancy box -->
    <script src="{{ asset('theme/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('theme/js/nouislider.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('theme/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('theme/js/imagezoom.js') }}"></script>
    <script id="map-script" src="{{ asset('theme/js/default-map.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>

</div>

</body>
</html>
