<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About - Packet Path</title>
    <link rel='icon' href="{{asset('img/favicon.ico')}}" type='image/x-icon' />
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Client-Slider-1.css')}}">
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
        h5,
        nav {
            font-family: 'Sanchez', 'Roboto', sans-serif;
        }
        
        p {
            font-family: 'Roboto', sans-serif;
        }
       .videospace{
           margin-bottom: 120px;
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
    <main class="page landing-page">
        <section>
            <div class=" container block-heading">
                <h1 style="margin-top: 145px;text-align: center; margin-bottom: 50px;">About Us </h1>
            </div>
        </section>

        <section class="clean-block clean-services ">
            <div class="container" style=" padding-top: 25px;
           padding-bottom: 25px;">
           <div class="row">
            <div class="embed-responsive embed-responsive-16by9 videospace">
            <iframe class="embed-responsive-item" src="{{asset('https://www.youtube.com/embed/fHntBdQsVvY')}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
           </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h3 class="mob-head"><b>Packet Path is in the business of building relationships.</b> </h3>
                        <p class="mob-p"> To convert your notional ideas on paper napkins to usable, sustainable products we need to build relationships.</p>
                        <p class="mob-p">
                            While we take on the task of converting your notional ideas to usable, sustainable products, we bring in our expertise in Hardware Prototyping, Software Design, Implementation, Integration and Testing IoT devices. Developing the software required to create
                            the interconnected world of Bluetooth, Wi-Fi and Network devices is also a task that our team performs regularly.
                        </p>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 d-table h-100">
                        <img class="border-10 rounded border-primary img-fluid align-middle" src="{{asset('img/relationships.jpg')}}">
                    </div>
                </div>
            </div>
        </section>

        <section class="clean-block clean-services dark">
            <div class="container">
                <div>
                    <h1 class="mob-head" style="text-align: center; text-decoration: solid;padding-top: 40px; padding-bottom: 40px; color:black">What Packet Path stands for?</h1>
                </div>

                <div class="text-center row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <center> <img src="{{asset('img/responsibility.jpg')}}" class="img-fluid"></center>
                        <h5 style="text-align:left; padding-top: 20px;"><strong>Shouldering Responsibility of Success</strong></h5>
                        <p class="mob-p" style="text-align:justify"> We understand our clients’ requirements for feasibility, reliability, usability, functional safety and scalability. As a result, their great ideas get crafted by the perfect hands this industry can provide.</p>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <center> <img src="{{asset('img/ideas-market.jpg')}}" class="img-fluid"></center>
                        <h5 style="text-align:left; padding-top: 20px;"><strong>Taking Ideas to Market</strong></h5>
                        <p class="mob-p" style="text-align:justify">We have made a habit of interfacing for IoT devices for customers of every size in every corner of the world and in whatever stage their product is in - - a notion on a paper napkin, or on mass production.</p>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <center> <img src="{{asset('img/work-fun.jpg')}}" class="img-fluid"></center>
                        <h5 style="text-align:left; padding-top: 20px;"><strong>Work is fun</strong></h5>
                        <p class="mob-p" style="text-align:justify">Each engaging human experience is a consequence of a happy, fulfilled mind seeking to come back for a better experience. We nurture a fun filled, creative, and innovation seeking environments.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="clean-block clean-services ">
            <div class="container">
                <div>
                    <h1 class="mob-head" style="text-align: center; text-decoration: solid;padding-top: 30px; padding-bottom: 30px; color:black;">Why choose Packet Path?</h1>
                </div>

                <div style="padding: 10px;text-align: justify;">
                    <p class="mob-p">At Packet Path we:</p>
                    <ul style=" font-size: 1.2em;">
                        <li class="mob-p">Expand the scope of existing products and find innovations of the future.</li>
                        <li class="mob-p">Develop and deliver products that are not quite there.</li>
                        <li class="mob-p">Allow you to focus on your Core business.</li>
                    </ul>

                    <p class="mob-p">Our clients’ offload their complete IoT solution requirements to us. We help our clients navigate the maze of complex IoT Devices and choose the right connectivity for their projects.</p>
                    <p class="mob-p">
                        We are the masters of Cypress. We then specialize in WICED. Then on many other IoT Platforms.
                    </p>


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
    <script src="{{('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{('js/smoothproducts.min.js')}}"></script>
    <script src="{{('js/theme.js')}}"></script>
    <script src="{{('js/Client-Slider-1.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</body>

</html>