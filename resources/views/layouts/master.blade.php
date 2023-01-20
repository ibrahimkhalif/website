<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Najdah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slider.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">


</head>

<body>


    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center" bg-green>

            <!-- <h1 class="logo me-auto"><a href="index.html"><span>Naj</span>dah</a></h1> -->

            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/" class="logo me-auto "><img src="{{ asset('assets/img/logo1.png') }}" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{route('home',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}"
                            class="active">Home</a></li>

                    <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{route('about-us',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}">About
                                    Us</a></li>
                            <li><a href="{{route('members',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}">Board
                                    Members</a></li>
                            <li><a href="{{route('contact-us',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}">Visit
                                    Us</a></li>

                        </ul>
                    </li>

                    <li><a href="{{route('portfolio',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}">Portfolio</a>
                    </li>
                    <li><a href="{{route('gallary',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}">Gallary</a>
                    </li>
                    <li><a href="#" id="donationButton" data-toggle="modal" data-target="#donationModal">Donation</a>
                    </li>

                    <li><a href="{{route('portal',['locale'=>app()->getLocale() == 'en'? 'en':'ar'])}}">Our Portal</a>
                    </li>

                </ul>
                <div>
                    <ul>
                        <li class="dropdown">
                            <a href="#"><span>{{ app()->getLocale() == 'ar' ? 'Arabic' : (app()->getLocale() == 'tr' ? 'Turkish' : 'English') }}</span>
                                <i class=" bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}">English</a>
                                </li>
                                <li><a href="{{ route(Route::currentRouteName(), ['locale' => 'ar']) }}">Arabic</a>
                                </li>
                                <li><a href="{{ route(Route::currentRouteName(), ['locale' => 'tr']) }}">Turkish</a>
                                </li>
                            </ul>
                        </li>


                    </ul>

                </div>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex">
                <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
            </div>

        </div>
    </header><!-- End Header -->
    <!-- ======= Header ======= -->

    @yield('content')
    <div class="modal fade" id="donationModal" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donationModalLabel">Donation Page</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="donationOption">Donation Option</label>
                            <select class="form-control" id="donationOption">
                                <option value="option1">Provision of Clear Water</option>
                                <option value="option2">Construction of Islamic Region Centers</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="paymentType">Payment Type</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentType" id="paypal"
                                    value="paypal">
                                <label class="form-check-label" for="paypal">
                                    PayPal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentType" id="mastercard"
                                    value="mastercard">
                                <label class="form-check-label" for="mastercard">
                                    Mastercard
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentType" id="visa" value="visa">
                                <label class="form-check-label" for="visa">
                                    Visa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentType" id="mpesa"
                                    value="mpesa">
                                <label class="form-check-label" for="mpesa">
                                    Mpesa
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="proceedButton">Proceed</button>
                </div>
            </div>
        </div>
    </div>



    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Regional Contacts</h3>
                        <p>
                            Mandera County-0714404252(Nasrudin M) <br>
                            Wajir County-0722722384(Mohamed Barre) <br>
                            Marsabit County-0725122176(Ibrae D Yatani) <br>
                            Tana River County-0727703329(Hon Ibrahim S) <br>
                            Western Region-0722678930(Sheikh Khalfan ) <br>
                            Nakuru County-0722897327(Mustafa) <br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/about-us">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/portfolio">Our Portfolio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/gallary">Our Gallary</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/portal">Our Portal</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Constraction of Mosque</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Provision of Food</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Provision of Clean Water</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Education</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Agriculture</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <form action="" method="">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Abdotech Solution</span></strong>. All Rights Reserved <script>
                    document.write(new Date().getFullYear());
                    </script>
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- datatabel-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    </script>




    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

    <!-- 
    <script>
    $(document).ready(function() {
        $("#carouselExampleIndicators").carousel({
            interval: 3000,
            pause: "hover"
        });
    });
    </script> -->

    <script>
    $(document).ready(function() {
        $("#donationButton").click(function() {
            $("#donationModal").modal();
        });
    });
    </script>



</body>



</html>