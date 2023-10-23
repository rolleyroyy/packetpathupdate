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
   
    <!-- Favicon -->
    <link rel="icon" href="http://packetp.com/blog/favicon.ico"> -->
     <link rel='icon' href='http://packetp.com/blog/static/assets/img/favicon.ico' type='image/x-icon' />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/monokai.min.css">

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
        
        WICED : Using command line gdb
    </h1>
    <h1 class="h3 text-break d-md-none">
        
        WICED : Using command line gdb
    </h1>
    
    <div class="card border-0 card-body">
        <p class="card-text text-wrap" style="word-break: break-all;">
                    By: Venkat Subbiah</a><br />
                Published: 02 Jan 2019<br />
                Category: IOT</a><br />
                Tags:
                        WICED</a><br />
        </p>
    </div>

    <script>
        function goBack() {
        window.history.back();
        }
    </script>

</header>    <h3>Launch openocd in one console</h3>
<div class="highlight"><pre><span></span><code><span class="err">&quot;./tools/OpenOCD/OSX/openocd-all-brcm-libftdi&quot; -s &quot;./tools/OpenOCD/scripts&quot; -f ./tools/OpenOCD/CYW9WCD1EVAL1.cfg -f ./tools/OpenOCD/stm32f4x.cfg -f ./tools/OpenOCD/stm32f4x-flash-app.cfg</span>
</code></pre></div>


<h3>In another console launch gdb using</h3>
<div class="highlight"><pre><span></span><code><span class="err">./tools/ARM_GNU/bin/OSX/arm-none-eabi-gdb</span>
</code></pre></div>


<h3>Once you get to the gdb prompt use</h3>
<div class="highlight"><pre><span></span><code><span class="err">(gdb) target remote localhost:3333</span>
<span class="err">(gdb) monitor reset halt</span>
<span class="err">(gdb) file build/snip.scan-BCM943364WCD1/binary/snip.scan-BCM943364WCD1.elf</span>
<span class="err">(gdb) cont</span>
</code></pre></div>


<h3>Below are logs from gdb and openocd</h3>
<div class="highlight"><pre><span></span><code><span class="c">Venkats-MBP-9: ~/work/pp/wiced_6.00_pp/WICED-Studio-6.0/43xxx_Wi-Fi :</span>
<span class="err">&quot;./tools/OpenOCD/OSX/openocd-all-brcm-libftdi&quot; -s &quot;./tools/OpenOCD/scripts&quot; -f</span>
<span class="err">./tools/OpenOCD/CYW9WCD1EVAL1.cfg -f ./tools/OpenOCD/stm32f4x.cfg -f</span>
<span class="err">./tools/OpenOCD/stm32f4x-flash-app.cfg</span>
<span class="err">Open On-Chip Debugger 0.10.0-dev-00226-gb7080eca-dirty (2017-08-28-16:10)</span>
<span class="err">Licensed under GNU GPL v2</span>
<span class="err">For bug reports, read</span>
<span class="err">   http://openocd.org/doc/doxygen/bugs.html</span>
<span class="err">Info : only one transport option; autoselect &#39;jtag&#39;</span>
<span class="err">trst_and_srst separate srst_nogate trst_push_pull srst_push_pull connect_assert_srst</span>
<span class="err">adapter speed: 1000 kHz</span>
<span class="c">adapter_nsrst_delay: 100</span>
<span class="c">jtag_ntrst_delay: 100</span>
<span class="err">Warn : target name is deprecated use: &#39;cortex_m&#39;</span>
<span class="err">jtag_init</span>
<span class="err">Warn : Using DEPRECATED interface driver &#39;ft2232&#39;</span>
<span class="err">Info : Consider using the &#39;ftdi&#39; interface driver, with configuration files in interface/ftdi/...</span>
<span class="err">Info : max TCK change to: 30000 kHz</span>
<span class="err">Info : clock speed 1000 kHz</span>
<span class="err">Info : JTAG tap: stm32f4xx.cpu tap/device found: 0x4ba00477 (mfg: 0x23b, part: 0xba00, ver: 0x4)</span>
<span class="err">Info : JTAG tap: stm32f4xx.bs tap/device found: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0)</span>
<span class="err">Warn : JTAG tap: stm32f4xx.bs       UNEXPECTED: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0)</span>
<span class="c">Error: JTAG tap: stm32f4xx.bs  expected 1 of 1: 0x06413041 (mfg: 0x020, part: 0x6413, ver: 0x0)</span>
<span class="c">Error: Trying to use configured scan chain anyway...</span>
<span class="err">Warn : Bypassing JTAG setup events due to errors</span>
<span class="err">Info : stm32f4xx.cpu: hardware has 6 breakpoints, 4 watchpoints</span>
<span class="err">Info : JTAG tap: stm32f4xx.cpu tap/device found: 0x4ba00477 (mfg: 0x23b, part: 0xba00, ver: 0x4)</span>
<span class="err">Info : JTAG tap: stm32f4xx.bs tap/device found: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0)</span>
<span class="err">Warn : JTAG tap: stm32f4xx.bs       UNEXPECTED: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0)</span>
<span class="c">Error: JTAG tap: stm32f4xx.bs  expected 1 of 1: 0x06413041 (mfg: 0x020, part: 0x6413, ver: 0x0)</span>
<span class="c">Error: Trying to use configured scan chain anyway...</span>
<span class="err">Warn : Bypassing JTAG setup events due to errors</span>
<span class="err">Info : accepting &#39;gdb&#39; connection on tcp/3333</span>
<span class="err">Info : device id = 0x10006431</span>
<span class="err">Info : flash size = 512kbytes</span>
<span class="err">Warn : No RTOS could be auto-detected!</span>
<span class="err">Info : JTAG tap: stm32f4xx.cpu tap/device found: 0x4ba00477 (mfg: 0x23b, part: 0xba00, ver: 0x4)</span>
<span class="err">Info : JTAG tap: stm32f4xx.bs tap/device found: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0)</span>
<span class="err">Warn : JTAG tap: stm32f4xx.bs       UNEXPECTED: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0)</span>
<span class="c">Error: JTAG tap: stm32f4xx.bs  expected 1 of 1: 0x06413041 (mfg: 0x020, part: 0x6413, ver: 0x0)</span>
<span class="c">Error: Trying to use configured scan chain anyway...</span>
<span class="err">Warn : Bypassing JTAG setup events due to errors</span>
<span class="err">stm32f4xx.cpu: target state: halted</span>
<span class="err">target halted due to debug-request, current mode: Thread</span>
<span class="c">xPSR: 0x01000000 pc: 0x080005a8 msp: 0x2001dcd0</span>
<span class="err">Warn : No RTOS could be auto-detected!</span>
<span class="err">Warn : No RTOS could be auto-detected!</span>
<span class="c">Error: Unable to wipe mandatory variable: g_pendingtasks - address unknown</span>
</code></pre></div>


<div class="highlight"><pre><span></span><code><span class="nt">Venkats-MBP-9</span><span class="o">:</span> <span class="o">~/</span><span class="nt">work</span><span class="o">/</span><span class="nt">pp</span><span class="o">/</span><span class="nt">wiced_6</span><span class="p">.</span><span class="nc">00_pp</span><span class="o">/</span><span class="nt">WICED-Studio-6</span><span class="p">.</span><span class="nc">0</span><span class="o">/</span><span class="nt">43xxx_Wi-Fi</span> <span class="o">:</span>
<span class="o">./</span><span class="nt">tools</span><span class="o">/</span><span class="nt">ARM_GNU</span><span class="o">/</span><span class="nt">bin</span><span class="o">/</span><span class="nt">OSX</span><span class="o">/</span><span class="nt">arm-none-eabi-gdb</span>
<span class="nt">Python</span> <span class="nt">Exception</span> <span class="o">&amp;</span><span class="p">#</span><span class="nn">60</span><span class="o">;</span><span class="nt">type</span> <span class="s1">&#39;exceptions.ImportError&#39;</span><span class="o">&amp;</span><span class="p">#</span><span class="nn">62</span><span class="o">;</span> <span class="nt">No</span> <span class="nt">module</span> <span class="nt">named</span> <span class="nt">gdb</span><span class="o">:</span>

<span class="nt">warning</span><span class="o">:</span>
<span class="nt">Could</span> <span class="nt">not</span> <span class="nt">load</span> <span class="nt">the</span> <span class="nt">Python</span> <span class="nt">gdb</span> <span class="nt">module</span> <span class="nt">from</span> <span class="err">`</span><span class="o">/</span><span class="nt">Users</span><span class="o">/</span><span class="nt">lab</span><span class="o">/</span><span class="nt">wiced</span><span class="o">/</span><span class="nt">Wiced-Tool-Source</span><span class="o">/</span><span class="nt">ARM_GNU</span><span class="o">/</span><span class="nt">gdb-build</span><span class="o">/</span><span class="nt">junk</span><span class="o">/</span><span class="nt">python</span><span class="s1">&#39;.</span>
<span class="s1">Limited Python support is available from the _gdb module.</span>
<span class="s1">Suggest passing --data-directory=/path/to/gdb/data-directory.</span>

<span class="s1">GNU gdb (GDB) 7.7</span>
<span class="s1">Copyright (C) 2014 Free Software Foundation, Inc.</span>
<span class="s1">License GPLv3+: GNU GPL version 3 or later &amp;#60;http://gnu.org/licenses/gpl.html&amp;#62;</span>
<span class="s1">This is free software: you are free to change and redistribute it.</span>
<span class="s1">There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;</span>
<span class="s1">and &quot;show warranty&quot; for details.</span>
<span class="s1">This GDB was configured as &quot;--host=x86_64-apple-darwin11.4.0 --target=arm-none-eabi&quot;.</span>
<span class="s1">Type &quot;show configuration&quot; for configuration details.</span>
<span class="s1">For bug reporting instructions, please see:</span>
<span class="s1">&amp;#60;http://www.gnu.org/software/gdb/bugs/&amp;#62;.</span>
<span class="s1">Find the GDB manual and other documentation resources online at:</span>
<span class="s1">&amp;#60;http://www.gnu.org/software/gdb/documentation/&amp;#62;.</span>
<span class="s1">For help, type &quot;help&quot;.</span>
<span class="s1">Type &quot;apropos word&quot; to search for commands related to &quot;word&quot;.</span>
<span class="s1">(gdb) Open On-Chip Debugger 0.10.0-dev-00226-gb7080eca-dirty (2017-08-28-16:10)</span>
<span class="s1">Licensed under GNU GPL v2</span>
<span class="s1">For bug reports, read</span>
<span class="s1">   http://openocd.org/doc/doxygen/bugs.html</span>

<span class="s1">(gdb)  target remote localhost:3333</span>
<span class="s1">Remote debugging using localhost:3333</span>
<span class="s1">0x080005a8 in ?? ()</span>
<span class="s1">(gdb) monitor reset halt</span>
<span class="s1">JTAG tap: stm32f4xx.cpu tap/device found: 0x4ba00477 (mfg: 0x23b, part: 0xba00, ver: 0x4)</span>
<span class="s1">JTAG tap: stm32f4xx.bs tap/device found: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0)</span>
<span class="s1">JTAG tap: stm32f4xx.bs       UNEXPECTED: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0)</span>
<span class="s1">JTAG tap: stm32f4xx.bs  expected 1 of 1: 0x06413041 (mfg: 0x020, part: 0x6413, ver: 0x0)</span>
<span class="s1">Trying to use configured scan chain anyway...</span>
<span class="s1">Bypassing JTAG setup events due to errors</span>
<span class="s1">stm32f4xx.cpu: target state: halted</span>
<span class="s1">target halted due to debug-request, current mode: Thread</span>
<span class="s1">xPSR: 0x01000000 pc: 0x080005a8 msp: 0x2001dcd0</span>
<span class="s1">(gdb) file build/snip.scan-BCM943364WCD1/binary/snip.scan-BCM943364WCD1.elf</span>
<span class="s1">A program is being debugged already.</span>
<span class="s1">Are you sure you want to change the file? (y or n) y</span>
<span class="s1">Reading symbols from build/snip.scan-BCM943364WCD1/binary/snip.scan-BCM943364WCD1.elf...done.</span>
<span class="s1">(gdb) cont</span>
<span class="s1">Continuing.</span>
<span class="s1">^C</span>
<span class="s1">Program received signal SIGINT, Interrupt.</span>
<span class="s1">platform_power_down_hook (sleep_ms=1135)</span>
<span class="s1">   at WICED/platform/MCU/STM32F4xx/peripherals/platform_mcu_powersave.c:333</span>
<span class="s1">333    }</span>
<span class="s1">(gdb) info threads</span>
<span class="s1">  Id   Target Id         Frame</span>
<span class="s1">* 1    Remote target     platform_power_down_hook (sleep_ms=1135)</span>
<span class="s1">   at WICED/platform/MCU/STM32F4xx/peripherals/platform_mcu_powersave.c:333</span>
<span class="s1">(gdb) bt</span>
<span class="s1">Python Exception &amp;#60;type &#39;</span><span class="nt">exceptions</span><span class="p">.</span><span class="nc">ImportError</span><span class="err">&#39;</span><span class="o">&amp;</span><span class="p">#</span><span class="nn">62</span><span class="o">;</span> <span class="nt">No</span> <span class="nt">module</span> <span class="nt">named</span> <span class="nt">gdb</span><span class="p">.</span><span class="nc">frames</span><span class="o">:</span>
<span class="p">#</span><span class="nn">0</span>  <span class="nt">platform_power_down_hook</span> <span class="o">(</span><span class="nt">sleep_ms</span><span class="o">=</span><span class="nt">1135</span><span class="o">)</span>
   <span class="nt">at</span> <span class="nt">WICED</span><span class="o">/</span><span class="nt">platform</span><span class="o">/</span><span class="nt">MCU</span><span class="o">/</span><span class="nt">STM32F4xx</span><span class="o">/</span><span class="nt">peripherals</span><span class="o">/</span><span class="nt">platform_mcu_powersave</span><span class="p">.</span><span class="nc">c</span><span class="p">:</span><span class="nd">333</span>
<span class="p">#</span><span class="nn">1</span>  <span class="nt">0x08011508</span> <span class="nt">in</span> <span class="nt">tx_low_power_enter</span> <span class="o">()</span>
<span class="p">#</span><span class="nn">2</span>  <span class="nt">0x08010e22</span> <span class="nt">in</span> <span class="nt">__tx_ts_wait</span> <span class="o">()</span>
<span class="nt">Backtrace</span> <span class="nt">stopped</span><span class="o">:</span> <span class="nt">previous</span> <span class="nt">frame</span> <span class="nt">identical</span> <span class="nt">to</span> <span class="nt">this</span> <span class="nt">frame</span> <span class="o">(</span><span class="nt">corrupt</span> <span class="nt">stack</span><span class="o">?)</span>
<span class="o">(</span><span class="nt">gdb</span><span class="o">)</span>
</code></pre></div>


    <hr>
    
    <ul class="d-flex  pl-0 ">

  
            <a href="{{asset('blogs/wiced')}}">
             << Steps to compile and run OpenWRT on Edge Router
            </a>
        
        
            <a href="{{asset('blogs/wifiexample')}}" class="text-decoration-none w-50 pl-2 justify-content-end">
             Running WiFi example on CY8CPROTO_062_4343W >>
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