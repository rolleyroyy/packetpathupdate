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
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/monokai.min.css">
   
    <!-- Favicon -->
    <!-- <link rel="icon" href="http://packetp.com/blog/favicon.ico"> -->
    <!-- <link rel='icon' href='http://packetp.com/blog/static/assets/img/favicon.ico' type='image/x-icon' /> -->

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
            <a class="navbar-brand logo" href="http://packetp.com/blog/index.html"><img
                    src="http://packetp.com/blog/theme/assets/img/logo.png"></a><button class="navbar-toggler"
                data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link " href="http://packetp.com/index.html" style="color: #201D52;"><strong>Home</strong></a></li>
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
        
        WICED : Managing repos
    </h1>
    <h1 class="h3 text-break d-md-none">
        
        WICED : Managing repos
    </h1>
    
    <div class="card border-0 card-body">
        <p class="card-text text-wrap" style="word-break: break-all;">
                    By: Venkat Subbiah</a><br />
                Published: 26 Dec 2018<br />
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

</header>    <p>You have evaluated WICED and getting ready to build your own product with WICED. As you are developing code, you will possibly be developing these additional components</p>
<ul>
<li>libraries</li>
<li>applications</li>
<li>platforms.</li>
</ul>
<p>Cypress does make releases of newer SDK’s quite often and usually doesn’t port fixes to older SDK’s. So it is better to manage your project so that you can easily move to newer SDK’s.</p>
<p>One way to manage this would be to have a stock version of the WICED SDK in one git repo and all your custom code in another repo. Here is how we mange it.</p>
<p>All our code is in a repository called pp_dev.</p>
<ul>
<li>pp_dev/pp_wiced_apps contains all our wiced application.</li>
<li>pp_dev/pp_libraries contains all our WICED libraries.</li>
</ul>
<p>Then we have link from WICED SDK repo to pp_dev repo.</p>
<div class="highlight"><pre><span></span><code><span class="n">VsMac2</span><span class="p">:</span> <span class="o">~/</span><span class="k">work</span><span class="o">/</span><span class="n">pp</span><span class="o">/</span><span class="n">wiced</span><span class="o">/</span><span class="n">wiced_6</span><span class="p">.</span><span class="mi">2</span><span class="n">_mfi</span><span class="o">/</span><span class="n">WICED</span><span class="o">-</span><span class="n">Studio</span><span class="o">-</span><span class="mi">6</span><span class="p">.</span><span class="mi">2</span><span class="o">/</span><span class="mi">43</span><span class="n">xxx_Wi</span><span class="o">-</span><span class="n">Fi</span><span class="o">/</span><span class="n">apps</span> <span class="p">:</span> <span class="n">ls</span> <span class="o">-</span><span class="n">al</span>
<span class="n">total</span> <span class="mi">16</span>
<span class="p">...</span>
<span class="n">lrwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">1</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">42</span> <span class="n">Oct</span> <span class="mi">25</span> <span class="mi">07</span><span class="p">:</span><span class="mi">52</span> <span class="n">pp_wiced_apps</span> <span class="o">-&gt;</span> <span class="o">/</span><span class="n">Users</span><span class="o">/</span><span class="n">venkat</span><span class="o">/</span><span class="k">work</span><span class="o">/</span><span class="n">pp</span><span class="o">/</span><span class="n">pp_dev</span><span class="o">/</span><span class="n">pp_wiced_apps</span>
<span class="n">drwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">71</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">2414</span> <span class="n">Jun</span> <span class="mi">15</span> <span class="mi">2018</span> <span class="n">snip</span>
<span class="p">.....</span>

<span class="n">VsMac2</span><span class="p">:</span> <span class="o">~/</span><span class="k">work</span><span class="o">/</span><span class="n">pp</span><span class="o">/</span><span class="n">wiced</span><span class="o">/</span><span class="n">wiced_6</span><span class="p">.</span><span class="mi">2</span><span class="n">_mfi</span><span class="o">/</span><span class="n">WICED</span><span class="o">-</span><span class="n">Studio</span><span class="o">-</span><span class="mi">6</span><span class="p">.</span><span class="mi">2</span><span class="o">/</span><span class="mi">43</span><span class="n">xxx_Wi</span><span class="o">-</span><span class="n">Fi</span><span class="o">/</span><span class="n">libraries</span> <span class="p">:</span> <span class="n">ls</span> <span class="o">-</span><span class="n">al</span>
<span class="n">total</span> <span class="mi">8</span>
<span class="n">drwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">16</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">544</span> <span class="n">Oct</span> <span class="mi">25</span> <span class="mi">07</span><span class="p">:</span><span class="mi">52</span> <span class="p">.</span>
<span class="n">drwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">31</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">1054</span> <span class="n">Nov</span> <span class="mi">29</span> <span class="mi">04</span><span class="p">:</span><span class="mi">38</span> <span class="p">..</span>
<span class="n">drwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">11</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">374</span> <span class="n">Jun</span> <span class="mi">15</span> <span class="mi">2018</span> <span class="n">audio</span>
<span class="p">...</span>
<span class="n">drwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">8</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">272</span> <span class="n">Jun</span> <span class="mi">15</span> <span class="mi">2018</span> <span class="n">ota2_bt_service</span>
<span class="n">lrwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">1</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">42</span> <span class="n">Oct</span> <span class="mi">25</span> <span class="mi">07</span><span class="p">:</span><span class="mi">52</span> <span class="n">pp_libraries</span> <span class="o">-&gt;</span> <span class="o">/</span><span class="n">Users</span><span class="o">/</span><span class="n">venkat</span><span class="o">/</span><span class="k">work</span><span class="o">/</span><span class="n">pp</span><span class="o">/</span><span class="n">pp_dev</span><span class="o">/</span><span class="n">pp_libraries</span><span class="o">/</span>
<span class="n">drwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">16</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">544</span> <span class="n">Jun</span> <span class="mi">15</span> <span class="mi">2018</span> <span class="n">protocols</span>
<span class="n">drwxr</span><span class="o">-</span><span class="n">xr</span><span class="o">-</span><span class="n">x</span> <span class="mi">3</span> <span class="n">venkat</span> <span class="k">admin</span> <span class="mi">102</span> <span class="n">Jun</span> <span class="mi">15</span> <span class="mi">2018</span> <span class="n">scripting</span>
<span class="p">.....</span>
</code></pre></div>


    <hr>
    
    <ul class="d-flex  pl-0 ">

        
            <a href="{{asset('blogs/wicedgettingstarted')}}" class="text-decoration-none w-50 pr-2 justify-content-start">
             << WICED getting started
            </a>
        
        
            <a href="{{asset('blogs/wiced')}}" class="text-decoration-none w-50 pl-2 justify-content-end">
             Steps to compile and run OpenWRT on Edge Router >>
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