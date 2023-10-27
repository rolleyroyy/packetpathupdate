<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Packet Path Blog - </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="http://packetp.com/blog/theme/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="http://packetp.com/blog/theme/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="http://packetp.com/blog/theme/assets/css/Client-Slider-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="http://packetp.com/blog/theme/assets/css/smoothproducts.css">
    <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="http://packetp.com/blog/theme/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/monokai.min.css">
   
     <link rel="icon" href="{{asset('favicon.ico')}}">
     <link rel="icon" href="{{asset('favicon.ico')}}">
     <link rel='icon' href="{{asset('img/favicon.ico')}}" type='image/x-icon' />

    <!-- RSS Feed -->

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
        .navbar-nav {
            font-family: 'Sanchez', 'Roboto', sans-serif;
        }

        p {
            font-family: 'Roboto', sans-serif;
        }

        h3 {
            font-weight: bold;
            font-size: larger;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand-lg position-sticky fixed-top bg-white clean-navbar"
        style="padding-top: 0px; margin-bottom: 0px;">
        <div class="container" style="padding-top: 0px; margin-bottom: -12px;">
            <a class="navbar-brand logo" href="{{asset('/blogs')}}"><img
                    src="{{asset('img/logo.png')}}"></a><button class="navbar-toggler"
                data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link " href="asset('/')}}" style="color: #201D52;"><strong>Home</strong></a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link active " href="http://packetp.com/blog/aboutus.html"><strong>ABOUT Us</strong> </a></li> -->
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link " href="http://packetp.com/blog/service-page.html" style="color: #201D52;"><strong>SERVICES</strong></a></li> -->
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="https://blog.packetp.com/" style="color: #201D52;"><strong>BLOG</strong></a></li> -->
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link " href="contact-us.php" style="color: #201D52;"><strong>Contact Us</strong> </a></li> -->
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="http://packetp.com/blog/archives.html" style="color: #201D52;"><strong>Archives</strong></a></li> -->
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="http://packetp.com/blog/categories.html" style="color: #201D52;"><strong>Categories</strong></a></li> -->
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="https://blog.packetp.com/" style="color: #201D52;"><strong>BLOG</strong></a></li> -->
                    <li class="nav-item">
                        <a class="nav-link text-body" href="http://packetp.com/contact-us.php">CONTACT US</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>


    <!-- <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <ul class="navbar-nav">
                        <li class="navbar-brand">
                            <a class="navbar-link" href="http://packetp.com/blog/index.html">Packet Path Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://packetp.com/blog/archives.html">Archives</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://packetp.com/blog/categories.html">Categories</a>
                        </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://packetp.com/blog/pages/contact-us.html">CONTACT US</a>
                                </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div> -->

    <!-- Begin page content -->
<div class="container mt-4 mb-4 p-4 text-wrap" style="word-break: break-all;">
<header>
    
    <button onclick="goBack()" class="btn btn-info px-3 py-2 mb-4">Back to Home</button>

    <h1 class="text-break d-none d-md-block">
        
        WICED getting started
    </h1>
    
    <div class="card border-0 card-body">
        <p class="card-text text-wrap" style="word-break: break-all;">
                    By: Venkat Subbiah</a><br />
                Published: 22 Dec 2018<br />
                Category: IOT</a><br />
                Tags:
 
                        IOT</a>, 
                       WICED</a><br />
        </p>
    </div>

    <script>
        function goBack() {
        window.history.back();
        }
    </script>

</header>    <h3>What is WICED</h3>
<p>WICED stands for Wireless Internet Connectivity for Embedded Devices. It is a development system(IDE, SDK) that is used to develop software for Cypress(Formerly Broadcom IoT) based WiFi/Bluetooth devices that are paired  with a microcontroller.</p>
<h3>WICED Install</h3>
<p>One of the first steps to get started with WICED is to install the SDK.  Below is a link to get the latest SDK’s and prior versions of the SDK. https://community.cypress.com/community/wiced-wifi/wiced-wifi-documentation.Recently Cypress has added some training videos. which  would be a good starting point for learning https://community.cypress.com/community/training-videos/</p>
<h3>Hardware Platform</h3>
<p>You would also need a Hardware Platform that is capable of running the application from the SDK . Below are some recommendations. If your budget allows the 907 is a better choice.</p>
<p>CYW43907 Kit : The CYW43907 is a single-chip 802.11n dual-band (2.4GHz and 5GHz) Wi-Fi SoC with a 320MHz ARM Cortex-R4 MCU.</p>
<p>Here is a purchase link. https://www.mouser.com/new/cypress-semiconductor/cypress-wiced-cyw43907-kit/</p>
<p>Avnet 4343W : One of the popular WICED hardware reference boards is the AVNET 4343w board. YOu could buy this of Amazon for 50USD. On Amazon.com Search for “AVNET BCM4343W” to find this board.  Below are some screenshots of the search.</p>
<h3>Documentation</h3>
<p>WICED includes documentation with the SDK which has been generated from source using doxygen. The documentation is at $SDK_DIR/doc/API/index.html .After you install the SDK, the project explores shows the doc folder that contains the documentation.</p>
<p>Use a different versions of the SDK: </p>
<p>When Cypress release a newer version of the SDK’s , you don’t need to resintall the IDE. You can just use the SDK source. Below blog show how to import a new SDK into the IDE.</p>
<p>https://community.cypress.com/community/wiced-wifi/wiced-wifi-forums/blog/2015/08/12/how-to-import-a-wiced-sdk-into-an-existing-wiced-eclipse-ide-2</p>
<p>Creating debug configuration after importing an SDK</p>
<p>https://community.cypress.com/community/wiced-wifi/wiced-wifi-forums/blog/2014/05/09/creating-andor-editing-debug-configurations</p>
<p>For copy paste convenience here are some strings used in the configuration.</p>
<p>On Mac</p>
<div class="highlight"><pre><span></span><code>add-symbol-file build/eclipse_debug/last_built.elf 0x8000000
/Users/venkat/WICED/WICED-Studio-4.1/43xxx_Wi-Fi/tools/ARM_GNU/bin/OSX/arm-none-eabi-gdb
/Users/venkat/WICED/WICED-Studio-4.1/43xxx_Wi-Fi/build/eclipse_debug/last_built.elf.
<span class="cp">${</span><span class="n">workspace_loc</span><span class="p">:</span><span class="o">/</span><span class="mi">43</span><span class="n">xxx_Wi</span><span class="o">-</span><span class="n">Fi</span><span class="o">/</span><span class="n">build</span><span class="o">/</span><span class="n">eclipse_debug</span><span class="o">/</span><span class="n">last_built</span><span class="o">.</span><span class="n">elf</span><span class="cp">}</span>
<span class="cp">${</span><span class="n">workspace_loc</span><span class="p">:</span><span class="o">/</span><span class="mi">43</span><span class="n">xxx_Wi</span><span class="o">-</span><span class="n">Fi</span><span class="o">/</span><span class="n">tools</span><span class="o">/</span><span class="n">ARM_GNU</span><span class="o">/</span><span class="nb">bin</span><span class="o">/</span><span class="n">OSX</span><span class="o">/</span><span class="n">arm</span><span class="o">-</span><span class="n">none</span><span class="o">-</span><span class="n">eabi</span><span class="o">-</span><span class="n">gdb</span><span class="cp">}</span>
<span class="cp">${</span><span class="n">workspace_loc</span><span class="p">:</span><span class="o">/</span><span class="mi">43</span><span class="n">xxx_Wi</span><span class="o">-</span><span class="n">Fi</span><span class="o">/</span><span class="n">build</span><span class="o">/</span><span class="n">eclipse_debug</span><span class="o">/</span><span class="n">last_built</span><span class="o">.</span><span class="n">elf</span><span class="cp">}</span>
<span class="cp">${</span><span class="n">workspace_loc</span><span class="p">:</span><span class="o">/</span><span class="mi">43</span><span class="n">xxx_Wi</span><span class="o">-</span><span class="n">Fi</span><span class="o">/</span><span class="n">build</span><span class="o">/</span><span class="n">eclipse_debug</span><span class="o">/</span><span class="n">last_built</span><span class="o">.</span><span class="n">elf</span><span class="cp">}</span>
</code></pre></div>


    <hr>
    
    <ul class="d-flex  pl-0 ">

        
            <a href="{{asset('blogs/wicedmanagingrepos')}}" class="text-decoration-none w-50 pl-2 justify-content-end">
             WICED : Managing repos >>
            </a>
              
            

       </ul>
</div>




    <footer class="page-footer bg-dark p-3">
        <p class="text-center text-light m-0">
            © 2020 All Rights Reserved
        </p>
    </footer>

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <!-- Google Analytics/Disqus scripts -->
</body>

</html>