<!DOCTYPE html>
<html>                

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Contact - Packet Path</title>
<link rel='icon' href="{{asset('img/favicon.ico')}}" type='image/x-icon'/ >
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/simple-line-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/Client-Slider-1.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="{{asset('css/smoothproducts.css')}}">
        <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            
            /*add on 30/6/*/
    
            
        </style>
        <style>
            .google-maps {
                position: relative;
                padding-bottom: 75%;
                height: 0;
                overflow: hidden;
            }
            
            .google-maps iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100% !important;
                height: 100% !important;
            }
            
            .header {
                color: #36A0FF;
                font-size: 27px;
                padding: 10px;
            }
            
            .bigicon {
                font-size: 35px;
                color: #36A0FF;
            }
            
           

        </style>
        <script>
            function initMap() {
                var uluru = {
                    lat: 37.3364862,
                    lng: -121.8927172
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });

                var uluru1 = {
                    lat: 17.42136111,
                    lng: 78.434009
                };
                var map1 = new google.maps.Map(document.getElementById('map-1'), {
                    zoom: 16,
                    center: uluru1
                });
                var marker1 = new google.maps.Marker({
                    position: uluru1,
                    map: map1
                });
            }
        </script>
        <script async defer src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyD-_sLF8m_7jm2mag6lLgAJW5ilaZp7f2o&callback=initMap')}}"></script>

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
        <main class="page Contact-page dark">

            <section class="clean-block clean-form dark" style="text-align: center; margin-bottom: 50px;">
                <div class="container" style="padding-top: 100px;">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 co9l-sm-12">
                          <h1  style="margin-top: 50px;text-align: center;">Office Locations</h1>
                            <div class="container">
                                <div class="row" style="padding-top: 50px;">
                                    <div class="col-md-6">
                                        <h4 style="font-weight: bold;">
                                            San Jose
                                        </h4>
                                        <address>
                                        99 S Almaden Blvd, Suite 600<br>
                                        San Jose , California , 95113
			                                     </address>
                                        <p>
                                            Email : <a href="mailto:contact@packetp.com">contact@packetp.com</a>
                                        </p>

                                    </div>
                                    <div class="col-md-6">

                                        <h4 style="font-weight: bold;">
                                            Hyderabad
                                        </h4>
                                        <address>
			                                    4th Floor,8-2-316/A/6/A,14th Road, Nandi Nagar Rd, Banjara Hills, Hyderabad, Telangana 500034
			                             </address>
                                        <p>
                                            Email : <a href="mailto:contact@packetp.com">contact@packetp.com</a>
                                        </p>

                                    </div>


                                </div>
                            </div>
                            <div class="container" style="margin-top: 50px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="google-maps">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.4284284731175!2d-121.89654558496699!3d37.332364645262466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcca46fe2751d%3A0xac22cd23368a6885!2s99%20S%20Almaden%20Blvd%20%23600%2C%20San%20Jose%2C%20CA%2095113%2C%20USA!5e0!3m2!1sen!2sin!4v1599114703789!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="google-maps">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7613.647831897893!2d78.433496!3d17.420236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc03786cf907e2dc5!2sBanjara%20Hills%20Road%20No%2014!5e0!3m2!1sen!2sus!4v1586414888229!5m2!1sen!2sus"
                                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="col-md-12">
                                <div class="well well-sm">
                                    <form id="contact-form">
                                        @csrf
                                        <fieldset>
                                            <legend class="text-xs-center header">Contact Us</legend>
                                
                                            <div class="form-group">
                                                <span class="col-md-1 offset-md-2 text-xs-center"></span>
                                                <div class="col-md-12">
                                                    <input id="fname" name="name" type="text" placeholder="Name" class="form-control" required>
                                                </div>
                                            </div>
                                
                                            <div class="form-group">
                                                <span class="col-md-1 offset-md-2 text-xs-center"></span>
                                                <div class="col-md-12">
                                                    <input id="email" name="email" type="email" placeholder="Email Address" class="form-control" required>
                                                </div>
                                            </div>
                                
                                            <div class="form-group">
                                                <span class="col-md-1 offset-md-2 text-xs-center"></span>
                                                <div class="col-md-12">
                                                    <input type="tel" id="phone" class="form-control" required="required" name="phone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                
                                            <div class="form-group">
                                                <span class="col-md-1 offset-md-2 text-xs-center"></span>
                                                <div class="col-md-12">
                                                    <input id="organization" name="organization" type="text" placeholder="Organization" class="form-control" required>
                                                </div>
                                            </div>
                                
                                            <div class="form-group">
                                                <span class="col-md-1 offset-md-2 text-xs-center"></span>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your message." rows="7"></textarea>
                                                </div>
                                            </div>
                                
                                            <div class="form-group">
                                                <div class="col-md-12 text-xs-center">
                                                    <button type="button" id="save" class="btn btn-primary btn-lg">Submit</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
          
        </main>
        <!--<footer class="page-footer dark" style="background-color: rgb(6,12,47);">-->
        <footer class="page-footer dark" style="background-color: white;">
            <div class="footer-copyright">
                <p>© 2020 All Rights Reserved</p>
            </div>
        </footer>

        <!-- <script src="{{asset('js/submit.js')}}"></script> -->
        <!--<script src="{{asset('js/jquery.min.js')}}"></script>-->
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js')}}"></script>
        <script src="{{asset('js/smoothproducts.min.js')}}"></script>
        <script src="{{asset('js/theme.js')}}"></script>
        <script src="{{asset('js/Client-Slider-1.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
 
        <script>
        $(document).ready(function () {

            // Handle form submission
            $('#save').click(function() {
                // Clear previous error messages
                $('.error').remove();
    
                // Get form data
                var formData = {
                    name: $('#fname').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    organization: $('#organization').val(),
                    message: $('#message').val()
                };
    
                // Validate the form data
                var isValid = true;
    
                if (formData.name.trim() === '') {
                    isValid = false;
                    $('#fname').after('<span class="error">Please enter your name</span>');
                }
    
                if (formData.email.trim() === '') {
                    isValid = false;
                    $('#email').after('<span class="error">Please enter your email</span>');
                }
    
                if (formData.phone.trim() === '') {
                    isValid = false;
                    $('#phone').after('<span class="error">Please enter your phone number</span>');
                }
    
                if (formData.organization.trim() === '') {
                    isValid = false;
                    $('#organization').after('<span class="error">Please enter your organization</span>');
                }
    
                if (formData.message.trim() === '') {
                    isValid = false;
                    $('#message').after('<span class="error">Please enter your message</span>');
                }
    
                if (!isValid) {
                    return;
                }
    
                // Send the data to the API
                $.ajax({
                    url: 'https://nssmu.org.in/processform.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'JSON',
                    success: function(response) {
                        alert(response.message);
                        // $('#message').after("sdfsdfsdf" + formData);
                        console.log(formData);
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred. Please try again.');
                        alert(formData);
                        // $('#message').after(formData);

                    }
                });
            });
            
        });
</script>

    </body>

    </html>

   