<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Services - Packet Path</title>
    <link rel='icon' href="{{asset('img/favicon.ico')}}" type='image/x-icon' />
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i')}}">
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
    <main class="page service-page">
      
        <h1 style="margin-top: 100px;text-align: center; margin-bottom: 50px;">Our Services</h1>
        <p id="iot"></p>
        <p class="mob-p" style="text-align: center;">We do remind ourselves often that we are in the business of creating engaging user experiences.</p>
      
        <section class="clean-block clean-services dark" style="background-color: rgb(255,255,255);" >
            <div class="container">
                <div class="block-heading">
                    <a name="iot">
                        <h2 class="mob-head1" style="color:black!important;font-size:1.7rem;font-weight:bolder" class="text-info" ><a style="text-decoration: none !important;color: black;" href="#iot">IoT Consulting</a></h2>
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center"><img class="img-fluid" src="{{asset('img/iot-consulting.jpg')}}"></div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center">
                        <p class="mob-p">In the connected world, user experience is a significant factor in determining the success of IoT products.</p>
                        <div id="accordion">
                            <div>
                                <div id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						          Concept Design
						        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div style="padding-left: 20px;">
                                        <p class="mob-p">Our Concept Design flags the required parameters to ensure there are no risks in the advanced stages of design. We usually include the size of the product, needed technologies, direction of design, estimated product
                                            costs, and a realistic timeline.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Product Design
						        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div style="padding-left: 20px;">
                                        <p class="mob-p">Our Product Design integrates the best of product development experts and industrial designers to craft an appealing and functional product.<br> Governance
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Governance
						        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div style="padding-left: 20px;">
                                        <p class="mob-p">Our Product Governance Structure and Data Handling Frameworks enable organizations refine and restructure some of their business process and increase the SMART coefficient of their operations. Our IoT implementations,
                                            data handling, data streaming, data analysis and accessibility of refined data we provide for Business Needs have been giving us a steadily increasing customer base.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       
                        <p class="mob-p">We help our clients negotiate these complex design phases and help them navigate around the maze of IoT devices to craft the connected worlds that best serve their purpose. Cherry-picked engineers working for PacketPath provide
                            you all the help you need to provide seamless user experiences required for your businesses.</p>
                            <p id="software-engg"></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-services dark" style="background-color: rgb(246,246,246);"  >
            <div class="container">
                <div class="block-heading">
                    <h2 class="mob-head1" style="color:black!important;font-size:1.7rem;font-weight:bolder" class="text-info"><a style="text-decoration: none !important;color: black;" href="#software-engg">Software Engineering</a></h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center d-lg-none"><img class="img-fluid" src="{{asset('img/firmware-engineering.jpg')}}"></div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center">
                        <p class="mob-p">We take pride in handling all facets of Software Development for IoT products. We handle boot loaders, device drivers, firmware, OTA connectivity via protocols such as Wi-Fi, app development, mobile app development, cloud application
                            development. We ensure that all these components integrate seamlessly that allows our clients to get off the ground with their business requirements.</p>
                            <p id="ai-ml"></p>
                        <div id="accordion">
                            <div>
                                <div id="headingOne1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
						          Firmware
						        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordion">
                                    <div style="padding-left: 20px;">
                                        <p class="mob-p">Deep expertise with many microprocessors and microcontrollers. Recent projects have seen our engineers developing for STM32, IMXRT, PSOC, ARM M4/CR4, ESP32, IMX6, IMX8.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="headingTwo1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
						          Connectivity
						        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordion">
                                    <div style="padding-left: 20px;">
                                        <p class="mob-p">Cloud connectivity is the epicenter for all devices, apps and data. Our custom connectivity solutions are ingrained with security, data storage and communications.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="headingThree1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
						          Mobile App
						        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordion">
                                    <div style="padding-left: 20px;">
                                        <p class="mob-p">We build native and cross-platform apps for our clients. We have deep expertise in every aspect of mobile application development, work towards providing extraordinary digital experiences.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div id="headingFour1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
						          Cloud Application
						        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour1" class="collapse" aria-labelledby="headingFour1" data-parent="#accordion">
                                    <div style="padding-left: 20px;">
                                        <p class="mob-p">We specialize in developing Cloud applications with highly customized backends for all your devices, applications and data that increase the ease of business.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center"><img class="img-fluid d-none d-lg-block" src="{{asset('img/firmware-engineering.jpg')}}"></div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-services dark " style="background-color: rgb(255,255,255); ">
            <div class="container ">
                <div class="block-heading ">
                    <a name="ai/ml ">
                        <h2 class="mob-head1" style="color:black!important;font-size:1.7rem;font-weight:bolder " class="text-info" ><a style="text-decoration: none !important;color: black;" href="#ai-ml">AI / ML</a></h2>
                    </a>

                </div>
                <div class="row ">
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center ">
                        <img src="{{asset('img/artificial-intelligence.jpg')}} " alt=" " class="img-fluid ">
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center ">
                        <p class="mob-p">There is no blueprint for problems that have not be solved before. You break down the problem, apply known methods to device solutions that work for your set of constraints. We bring in our expertise in Artificial Intelligence
                            to do the thinking bit and create routines that will be practiced and mastered - thereby bridging the gap in theory and real-world problems.</p>
                        <p class="mob-p">Our expertise includes:</p>
                        <ul style=" font-size: 1.2em; ">
                            <li class="mob-p">Predictive Analytics</li>
                            <li class="mob-p">Natural Language Processing and Analysis</li>
                            <li class="mob-p">Data Warehousing</li>
                            <li class="mob-p">Model Design, Validation, and Training</li>
                            <li class="mob-p">Data Quality Audit</li>
                            <li class="mob-p">Business Process Automation</li>
                            <p id="wwd-whd"></p>
                            <li class="mob-p">Clustering and Network Analysis</li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </section>
        <section class="clean-block clean-services dark " style="background-color: rgb(246,246,246); " >
         <div class="container">
                <div class="block-heading ">
                    <a name="whd">
                        <h2 class="mob-head1" style="color:black!important;font-size:1.7rem;font-weight:bolder " class="text-info" ><a style="text-decoration: none !important;color: black;" href="#wwd-whd">WWD/WHD Porting</a></h2>
                    </a>
                </div>
                <div class="row ">
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center d-lg-none "><img class="img-fluid " src="{{asset('img/artificial-intelligence.jpg')}} "></div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center ">
                        <p class="mob-p">The WHD Firmware from Cypress provides the flexibility to be ported to any embedded environment and IoT Frameworks.</p>
                        <p class="mob-p">While it is easy, the contextual knowledge and the insights into evolution of the firmware is a differentiating factor for Organizations to choose whom to hire for crafting their firmware.</p>
                        <p class="mob-p">Working with Packet Path can:</p>
                        <ul style=" font-size: 1.2em; ">
                            <li class="mob-p">Save more than 50% of your development time that allows you to avoid the steep learning curve involved. </li>
                            <li class="mob-p">Help you leverage the experience of our engineers who have completed many WWD Ports. Our Recent ports include iMXRT, STM32L, and ARC.</li>
                            <li class="mob-p">Help you use our experience of porting WWD/WHD to ThreadX, FreeRTOS and other operating systems.</li>
                            <li class="mob-p">Provide qualified access to CYPRESS, with whom we have closely partnered with, to help our clients scale their porting hurdles. </li>
                       <p id="esp-32"></p>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center "><img class="img-fluid d-none d-lg-block " src="{{asset('img/wwd-whd.jpg')}}"></div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-services dark " style="background-color: rgb(255,255,255); ">
            <div class="container ">
                <div class="block-heading ">
                    <a name="esp32">
                        <h2 class="mob-head1" style="color:black!important;font-size:1.7rem;font-weight:bolder " class="text-info" ><a style="text-decoration: none !important;color: black;" href="#esp-32">ESP32 Capabilities</a></h2>
                    </a>

                </div>
                <div class="row ">
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center gallery ">
                        <div id="demo " class="carousel slide " data-ride="carousel ">
                            <div class="carousel-inner ">
                                <div class="carousel-item active ">
                                    <a href="{{asset('img/esp32-1.jpg')}} "><img src="{{asset('img/esp32-1.jpg')}} " alt=" " class="img-fluid "></a>
                                </div>
                                <div class="carousel-item align-items-center ">
                                    <a href="{{asset('img/esp32-2.jpg')}} "><img src="{{asset('img/esp32-2.jpg')}} " alt=" " class="img-fluid "></a>
                                </div>
                            </div>
                            <ul class="carousel-indicators ">
                                <li data-target="#demo " data-slide-to="0 " class="active "></li>
                                <li data-target="#demo " data-slide-to="1 "></li>
                            </ul>
                            <a class="carousel-control-prev " href="#demo " data-slide="prev ">
                                <span class="carousel-control-prev-icon "></span>
                            </a>
                            <a class="carousel-control-next " href="#demo " data-slide="next ">
                                <span class="carousel-control-next-icon "></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center ">
                        <p class="mob-p">Projects Packet Path delivered</p>
                        <ul style=" font-size: 1.2em; ">
                            <li class="mob-p">Include ESP-WROOM32, ESP-Lyra T, ESP-EYE (History since ESP8266)</li>
                            <li class="mob-p">Were with & without External SPI PSRAM applications up to 8MB</li>
                        
                            <li class="mob-p">Demonstrated expertise in working with all interfaces on ESP32 like Sensors, Wifi, BLE,, Audio, Video, Speech Recognition, Face Detection etc.</li>
                            <li class="mob-p">Used Ported Custom Algorithms & Audio Codecs on to ESP32</li>
                        
                            <li class="mob-p">Include Alexa-enabled and Custom Speech Keyword based wakeup use-cases</li>
                            <li class="mob-p">Include use of ESP32 to its full capacity for audio, sensors, control and mesh stack</li>
                            <p id="electrical-engg"></p>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-services dark " style="background-color: rgb(246,246,246); " >
            <div class="container ">
                <div class="block-heading ">
                    <a name="electrical-engg">
                        <h2 class="mob-head1" style=" color:black!important;font-size:1.7rem;font-weight:bolder " class="text-info" ><a style="text-decoration: none !important;color: black;" href="#electrical-engg">Electrical Engineering</a></h2>
                    </a>
                </div>
                <div class="row ">
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center d-lg-none "><img class="img-fluid " src="{{asset('electrical-engineering.jpg')}} "></div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center ">
                        <p class="mob-p">We help our clients develop the physical hardware platform with cutting edge consumer electronics products. Our expertise lies in:</p>
                        <ul style=" font-size: 1.2em; ">
                            <li class="mob-p">System architecture and optimization</li>
                            <li class="mob-p">Detailed design and analysis</li>
                            <li class="mob-p">Technical feasibility analysis</li>
                            <li class="mob-p">Risk mitigation planning</li>
                            <li class="mob-p">Prototype and pre-production validation</li>
                            <li class="mob-p">Component selection, schematic capture and PCB layout</li>
                            <li class="mob-p">Working with multi-discipline, multi-geography teams</li>
                            <li class="mob-p">Electronics miniaturization</li>
                            <li class="mob-p">Production contract manufacturing transition support</li>
                            <p id="cypress"></p>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center "><img class="img-fluid d-none d-lg-block " src="{{asset('img/electrical-engineering.jpg')}} "></div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-services dark " style="background-color: rgb(255,255,255); ">
            <div class="container ">
                <div class="block-heading ">
                    <a name="cypress">
                        <h2 class="mob-head1" style="color:black!important;font-size:1.7rem;font-weight:bolder " class="text-info" ><a style="text-decoration: none !important;color: black;" href="#cypress">Cypress Android/Linux Drivers 
                        </a></h2>
                    </a>

                </div>
                <div class="row ">
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center ">
                        <img src="{{asset('img/cypress.png')}} " alt=" " class="img-fluid ">
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex flex-wrap align-items-center ">
                        <p class="mob-p">Cypress provides an FMAC(Full Mac) driver for Android and Linux. These driver provides the flexibility to be ported to different platforms.</p>
                        <p class="mob-p">While the driver is portable there are several complexities in dealing with providing a low power and/or high performance solution that support AP mode, STA mode, WiFi direct and integration with WPA_Supplicant, hostapd, WiFi service and various SOC’s such as Qualcomm Snapdragon, IMX6/7/8, TI Sitara.</p>
                        <p class="mob-p">Working with Packet Path can:</p>
                        <ul style=" font-size: 1.2em; ">
                            <li class="mob-p">Accelerate your project with access to a team that have expertise not only DHD, FMAC, but also the underlying Cypress WLAN Firmware.</li>
                            <li class="mob-p">Experienced of porting to iMX, Qualcomm Snapdragon, and other platforms.</li>
                            <li class="mob-p">Provide qualified access to CYPRESS, with whom we have closely partnered with, to help our clients scale their porting hurdles.</li>
                    
                        </ul>
                    </div>
                   
                </div>
            </div>
        </section>
    </main>
    <!--<footer class="page-footer dark " style="background-color: rgb(6,12,47); ">-->
    <footer class="page-footer dark " style="background-color: white; ">
        <div class="footer-copyright ">
            <p class="mob-p">© 2020 All Rights Reserved</p>
        </div>
    </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js "></script>
    <script src="{{asset('js/smoothproducts.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="{{asset('js/Client-Slider-1.js')}} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
    <script>
        window.addEventListener('load', function() {
            baguetteBox.run('.gallery');
        });
    </script>
 
</body>

</html>