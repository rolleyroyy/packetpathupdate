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
   
    <!-- Favicon -->
    <link rel="icon" href="http://packetp.com/blog/favicon.ico"> 
    <link rel='icon' href='http://packetp.com/blog/static/assets/img/favicon.ico' type='image/x-icon' />

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
        
        Steps to compile and run OpenWRT on Edge Router
    </h1>
    <h1 class="h3 text-break d-md-none">
        
        Steps to compile and run OpenWRT on Edge Router
    </h1>
    
    <div class="card border-0 card-body">
        <p class="card-text text-wrap" style="word-break: break-all;">
                    By: Venkat Subbiah</a><br />
                Published: 02 Jan 2019<br />
                Category: NETWORKING</a><br />
                Tags:
 
                        OpenWRT</a>, 
                        Edge Router</a><br />
        </p>
    </div>

    <script>
        function goBack() {
        window.history.back();
        }
    </script>

</header>    <h3>Open to access USB drive</h3>
<p>Need to open up the Edge Router to access the USB drive. It needs to be . Below is picture after opening it up. Be careful when unplugging the USB drive. Hold on to the USB connector, so that there is not much pull on the connector</p>
<p><img alt="Photo" src="http://packetp.com/blog/edge_router.jpg"></p>
<h3>Get Source</h3>
<p>Clone using</p>
<div class="highlight"><pre><span></span><code><span class="c">git://git.openwrt.org/14.07/openwrt.git</span>
</code></pre></div>


<h3>Build</h3>
<p>From the top dir run “make menuconfig and set target to be Octeon. Pictures showing top dir and Target selection below.</p>
<p><img alt="Photo" src="http://packetp.com/blog/dir_list.png"></p>
<p><img alt="Photo" src="http://packetp.com/blog/menu_config.png"></p>
<h3>Partition</h3>
<p>The partition of the USB drive looked like below. I probably had partitioned this before. If it doesn’t look like below, you want to use fdisk to partition the USB drive.</p>
<div class="highlight"><pre><span></span><code><span class="err">Disk /dev/sdg: 3880 MB, 3880452096 bytes</span>
<span class="err">120 heads, 62 sectors/track, 1018 cylinders, total 7579008 sectors</span>
<span class="err">Units = sectors of 1 * 512 = 512 bytes</span>
<span class="err">Sector size (logical/physical): 512 bytes / 512 bytes</span>
<span class="err">Disk identifier: 0xe9ad0200</span>
<span class="err">Device Boot Start End Blocks Id System </span>
<span class="err">/dev/sdg1 2048 292863 145408 c W95 FAT32 (LBA)</span>
<span class="err">/dev/sdg2 292864 3710975 1709056 83 Linux</span>
</code></pre></div>


<h3>Images</h3>
<p>After the build completes there will be image in in ./bin/octeon directory.</p>
<div class="highlight"><pre><span></span><code><span class="err">cp kernel  /media/venkat/0243-8F11/vmlinux</span>
</code></pre></div>


<p>Copy the kernel to the first partition</p>
<div class="highlight"><pre><span></span><code><span class="err">cp kernel  /media/venkat/0243-8F11/vmlinux</span>
</code></pre></div>


<p>Extract rootfs to the second partition. Be very careful hre and choose the right drive and partition for of</p>
<div class="highlight"><pre><span></span><code><span class="err">sudo dd if=./root of=/dev/sdg2 bs=1M</span>
</code></pre></div>


<p>Plugin in the USB and boot.</p>


    <hr>
    
    <ul class="d-flex  pl-0 ">

        
            <a href="{{asset('blogs/wicedmanagingrepos')}}" class="text-decoration-none w-50 pr-2 justify-content-start">
            <a href="{{asset('blogs/wicedmanagingrepos')}}" class="text-decoration-none w-50 pr-2 justify-content-start">
             << WICED : Managing repos
            </a>
        
        
            <a href="{{asset('blogs/wicedcommand')}}" class="text-decoration-none w-50 pl-2 justify-content-end">
             WICED : Using command line gdb >>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Google Analytics/Disqus scripts -->
</body>

</html>