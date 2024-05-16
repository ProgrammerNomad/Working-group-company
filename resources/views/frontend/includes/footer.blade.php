<footer class="footer-section section-bg-3">
    <div class="container">

        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="index-3.html">
                                <img src="assets/img/logo/logo1111 (1) (3).png" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                We believe it has the power to do <br>
                                amazing things.
                            </p>
                            <span>Interested in working with us?</span> <br>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 ps-lg-5 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Quick Links</h5>
                        </div>
                        <ul class="list-items">
                            <li>
                                <a href="#">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    latest news
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    team member
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    testimonials
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 ps-lg-4 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>My account</h5>
                        </div>
                        <ul class="list-items">
                            <li>
                                <a href="#">
                                    Forum Support
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Help & FAQ
                                </a>
                            </li>
                            <li>
                                <a href="3">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pricing and plans
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cookies Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Address:</h5>
                        </div>
                        <div class="footer-address-text">
                            <p>
                                570 8th Ave, New York,NY 10018
                                United States
                            </p>
                            <h5>Hours:</h5>
                            <p>
                                9.30am – 6.30pm <br>
                                Monday to Friday
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 ps-xl-5 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>24/7 Support center</h5>
                        </div>
                        <div class="footer-apps-items">
                            <div class="support-text">
                                <h3><a href="tel:+1718-904-4450">+1718-904-4450</a></h3>
                            </div>
                            <div class="footer-content">

                                <a href="mailto:info@example.com" class="link">info@example.com</a>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                    Copyright © 2024 <a href="#">Mobrilz</a>. All Rights Reserved.
                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="#">
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Support
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Privacy
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Faqs
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ strtoupper(app()->currentLocale()) }}
                        </a>
                    </li>
                </ul>
<<<<<<< HEAD
                <div class="select-dropdown001">
                    <select class="list001">
                        <option value="fr">French</option>
                    <option value="en">English</option>
                    <option value="en">German</option>
                    <option value="sp">Spanish</option>
                    <option value="po">Portuguese</option>
                    <option value="tu">Turkish</option>
                    <option value="it">Italian</option>
                    <option value="ery">Erythree</option>
                    <option value="so">Somali</option>
                    <option value="ca">Congolese</option>
             <      <option value="ni">Nigeria</option>
                    <option value="se">Senegalese </option>
                    </select>
=======
                <div class="language-dropdown-menu" id="language-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">
                        @foreach (config('app.available_locales') as $locale_code => $locale_name)
                            <li>
                                <a class="language"
                                    href="{{ route('language.switch', $locale_code) }}" role="menuitem">
                                    <div class="inline-flex items-center">
                                        {{ $locale_name }}
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
>>>>>>> 01b68e135f376024fb270208060d3ebd9e476fc0
                </div>
            </div>

        </div>
        <a href="#" id="scrollUp" class="scroll-icon">
            <i class="far fa-arrow-up"></i>
        </a>

</footer>

<style>
    header.header-section-3 {
        padding: 18px;
    }

    section.hero-section.hero-3 {
        margin-top: -110px;
    }

    .sticky {
        padding: 18px;
    }

    .service-box-items-2 {
        background-color: var(--white);
        -webkit-box-shadow: var(---box-shadow);
        box-shadow: var(---box-shadow);
        border-radius: 10px;
        padding: 25px 25px;
        border: 2px solid transparent;
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        position: relative;
        z-index: 9;
    }

    .service-box-items-2 p {
        font-weight: 600;
    }

    .line-shape {
        position: absolute;
    }

    @media (min-width: 1200px) {
        .d-xl-block {
            display: block !important;
            z-index: 999 !important;
        }
    }

    .header-3 .mega-menu-wrapper .header-main .header-right .header__hamburger .sidebar__toggle .header-bar span:first-child {
        background: #0d75bc !important;
    }

    .header-3 .mega-menu-wrapper .header-main .header-right .header__hamburger .sidebar__toggle .header-bar span {
        background: #0d75bc !important;
    }

    .header-main .main-menu ul li {
        position: relative;
        list-style: none;
        display: list-item !important;
        -webkit-margin-end: 0px !important;
        margin-inline-end: 0px !important;
    }

    .header-main .main-menu ul li a {

        padding: 10px 0 !important;

    }
</style>

<!--<< All JS Plugins >>-->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!--<< Viewport Js >>-->
<script src="assets/js/viewport.jquery.js"></script>
<!--<< Bootstrap Js >>-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--<< Nice Select Js >>-->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!--<< Waypoints Js >>-->
<script src="assets/js/jquery.waypoints.js"></script>
<!--<< Counterup Js >>-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--<< Slick Js >>-->
<script src="assets/js/slick.min.js"></script>
<!--<< Slick Animation Js >>-->
<script src="assets/js/slick-animation.min.js"></script>
<!--<< MeanMenu Js >>-->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!--<< Magnific Popup Js >>-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!--<< Wow Animation Js >>-->
<script src="assets/js/wow.min.js"></script>
<!--<< Circle Progress Js >>-->
<script src="assets/js/circle-progress.js"></script>
<!--<< Main.js >>-->
<script src="assets/js/main.js"></script>