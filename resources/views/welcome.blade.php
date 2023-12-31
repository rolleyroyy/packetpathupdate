<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Packet Path</title>
    <link rel='icon' href='img/favicon.ico' type='image/x-icon' />
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Client-Slider-1.css')}}">
    <link href="{{ asset('css/smoothproducts.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('css/smoothproducts.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        
        
        /* Make the image fully responsive */
        
        .carousel-inner img {
            width: 100%;
            height: cover;
        }
        
        h1,
        h2,
        h3,
        h4,
        nav {
            font-family: 'Sanchez', 'Roboto', sans-serif;
        }
        
        p {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>


<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="padding-top: 0px; margin-bottom: 0px;">
        <div class="container" style="padding-top: 0px; margin-bottom: -12px;">
            <a class="navbar-brand logo" href=href="{{asset('admin/about')}}"><img src="{{asset('img/logo.png')}}"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="{{asset('/')}}"><strong>Home</strong></a></li>
                   
                    <li class="nav-item" role="presentation"><a class="nav-link " href="{{asset('/about')}}" style="color: #201D52;"><strong>ABOUT Us</strong> </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="{{asset('/products')}}" style="color: #201D52;"><strong>Products</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{asset('/services')}}" style="color: #201D52;"><strong>SERVICES</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{asset('/blogs')}}" style="color: #201D52;"><strong>BLOG</strong></a></li>
                         <li class="nav-item" role="presentation"><a class="nav-link" href="{{asset('/careers')}}" style="color: #201D52;"><strong>Careers</strong> </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{asset('/contact')}}" style="color: #201D52;"><strong>Contact Us</strong> </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page" style="overflow: hidden;">
        <section style="padding-top: 40px;" class="d-none d-md-block">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item  active ">
                        <img src="{{asset('slider/slider-desk-2.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <div class="carousel-item  ">
                        <img src="{{asset('slider/slider-desk-1.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('slider/slider-desk-3.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="{{('slider/slider-desk-4.jpg')}}" alt="" class="img-fluid">
                    </div>

                </div>
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>

                </ul>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        <section style="padding-top: 40px;" class="d-md-none">
            <div id="demom" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item align-items-center">
                        <img src="{{asset('slider/slider-mob-2.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="carousel-item  active ">
                        <img src="{{asset('slider/slider-mob-1.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('slider/slider-mob-3.jpg')}}" alt="" class="img-fluid">
                    </div>
                    <!--<div class="carousel-item">
                        <img src="assets/slider/slider-mob-4.jpg" alt="" class="img-fluid">
                    </div>-->

                </div>
                <ul class="carousel-indicators">
                    <li data-target="#demom" data-slide-to="0" class="active"></li>
                    <li data-target="#demom" data-slide-to="1"></li>
                    <li data-target="#demom" data-slide-to="2"></li>
                    <!-- <li data-target="#demom" data-slide-to="3"></li>-->

                </ul>
                <a class="carousel-control-prev" href="#demom" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demom" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        <div style="border: 2px solid #4285F4; background-color: #4285F4;">
            <h1 class="mob-head" style="text-align: center; text-decoration: solid;padding-top: 40px; padding-bottom: 40px; color: white;">Packet Path is in the business of <br> enabling <strong>engaging experiences</strong> that <br> <strong>simplify</strong> day-to-day <strong>activities</strong> of humans,<br> using <strong>IoT Devices.</strong> </h1>
        </div>
        <section class="clean-block features" style="margin-top: 50px;">
            <div class="container ">

                <div class="row">
                    <div class="text-center col-lg-4 col-md-12 col-sm-12">
                        <img src="{{asset('img/iotp.jpg')}}" class="img-fluid" />
                        <h4 class="mob-head1" style="margin-top: 30px;font-weight: bold;">IoT</h4>
                        <p class="mob-p" style="text-align: justify;">We offer IoT Products, Product Design and Development services on all IoT Platforms.</p>
                        <p class="mob-p" style="text-align: justify;">We have a market recognition for the products we have developed using Cypress based WiFi/Bluetooth Modules that either use Linux or WICED.</p>
                    </div>
                    <div class="text-center col-lg-4 col-md-12 col-sm-12">
                        <img src="{{asset('img/esp.jpg')}}" class="img-fluid" />
                        <h4 class="mob-head1" style="margin-top: 30px;font-weight: bold;">Embedded Systems</h4>
                        <p class="mob-p" style="text-align: justify;">To ensure our IoT devices give you long-lasting and consistent engagements.</p>
                        <p class="mob-p" style="text-align: justify;"> We ensured our devices are robust and time-tested with our expertise in Embedded Systems.</p>
                    </div>
                    <div class="text-center col-lg-4 col-md-12 col-sm-12">
                        <img src="img/aiml.jpg" class="img-fluid" />
                        <h4 class="mob-head1" style="margin-top: 30px;font-weight: bold;">AI/ML</h4>
                        <p class="mob-p" style="text-align: justify;">Our Engineers have mastered the art of identifying patterns in huge amounts of data churned by IoT Devices.</p>
                        <p class="mob-p" style="text-align: justify;">
                            We bring in our expertise in AI/ ML to allow our clients make more intelligent decisions.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="clean-block slider dark" style="background-color: rgb(255,255,255);">
            <div class="container">
                <div class="customer-logos">
                    <div class="slide"><img src="{{asset('img/nxp.jpg')}}"></div>
                    <div class="slide"><img src="{{asset('img/st.jpg')}}"></div>
                    <div class="slide"><img src="{{asset('img/idevices.jpg')}}"></div>
                    <div class="slide"><img src="{{asset('img/silkid.jpg')}}"></div>

                    <div class="slide"><img src="img/espressif.jpg"></div>
                    <div class="slide"><img src="img/wiced.jpg"></div>

                </div>
            </div>
        </section>
        <section class="solidback" style="padding-bottom: 30px;padding-top: 30px; color:white;text-align: center;border: 2px solid #201D52">
            <div class="container ">
                <h1 style="padding-top: 40px;" class="mob-head"><strong>Packet Path </strong>helps design, scale, operate and make sense of the data produced from <strong>Smart Devices</strong> and better <strong>Manage Operational Interdependencies</strong></h1>
            </div>
        </section>

        <section class="usecls" style="padding-top: 60px;">
            <div class="container mob-use">
                <h1 class="mob-head" style="text-align: center; font-weight: bolder;">Use Cases</h1>
                <div class="row" style="text-align: center; padding-top: 40px;">
                    <div class="row">
                        <div class="text-center col-lg-6 col-md-12 col-sm-12">
                            <img class="img-fluid" src="img/microwave.jpg">
                            <h4 class="mob-head1" style="font-weight: bold; padding-top: 20px;">Smart Oven</h4>
                            <p class="mob-p" style="text-align: justify;">The SMART Oven has a camera to detect food, takes voice commands to cook and updates itself of the new features using Wi-Fi. We included WLAN Connectivity using WICED ported WWD and Bluetooth Host Driver, FCC certification
                                and Flash Drivers.</p>
                        </div>
                        <div class="text-center col-lg-6 col-md-12 col-sm-12">
                            <img class="img-fluid" src="img/air.jpg">
                            <h4 class="mob-head1" style="font-weight: bold; padding-top: 20px;">Air Purifier</h4>
                            <p class="mob-p" style="text-align: justify;">The air purifier product we worked for, was recognized to be one of the 10 best inventions by Popular Science. We developed various features for Quantum Leaps’ (QP) real-time embedded framework which included WLAN driver, BLE
                                driver, flash driver, secure OTA.</p>
                        </div>
                        <div class="text-center col-lg-6 col-md-12 col-sm-12">
                            <img class="img-fluid" src="{{asset('img/switch.jpg')}}">
                            <h4 class="mob-head1" style="font-weight: bold; padding-top: 20px;">Smart Switch</h4>
                            <p class="mob-p" style="text-align: justify;">This Smart Switch had Alexa built in and capable of playing music. We developed various features which included enabling WLAN and Bluetooth connectivity, OTA, porting WICED’s WWD driver, customizing LWIP network stack.</p>
                        </div>
                        <div class="text-center col-lg-6 col-md-12 col-sm-12">
                            <img class="img-fluid" src="img/alexa.jpg">
                            <h4 class="mob-head1" style="font-weight: bold; padding-top: 20px;">Smart Speaker</h4>
                            <p class="mob-p" style="text-align: justify;">The Smart Speaker has the capability to provide a SMART Home experience allowing users to control SMART appliances, SMART devices and streaming services. We integrated AVS SDK, taking it through AVS Certification, Secure OTA,
                                connectivity using WLAN and Bluetooth, FCC Certification, Wi-Fi alliance certification and Power Optimization.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    </main>
    <!--<footer class="page-footer dark" style="background-color: rgb(6,12,47);">-->
    <footer class="page-footer dark" style="background-color: white;">
        <div class="footer-copyright">
            <p class="mob-p">© 2020 All Rights Reserved</p>
        </div>
    </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js')}}"></script>
    <script src="{{asset('js/smoothproducts.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="{{asset('js/Client-Slider-1.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js')}}"></script>
</body>

</html>

</html>