var tipuesearch = {"pages":[{"title":"CONTACT US","text":"Office Locations San Jose 2 N 1st St 5th floor San Jose, CA 95113 Hyderabad 4th Floor,8-2-316/A/6/A,14th Road, Nandi Nagar Rd, Banjara Hills, Hyderabad, Telangana 500034 For any enquiry, questions, comments or feedback please feel free to contact me at: contact@packetp.com","tags":"CONTACT US","url":"http://packetp.com/stage/blog/pages/contact-us.html","loc":"http://packetp.com/stage/blog/pages/contact-us.html"},{"title":"Running WiFi example on CY8CPROTO_062_4343W","text":"At Packet Path we have worked on several projects using Cypress WiFi/BT chips. One of the popular chip is 4343W. I am excited that a driver for 4343W is available in mbed. 4343W is the chip that's on the CY8CPROTO_062_4343W kit. Below are instructions to try out the mbed-os-example-wifi on the kit. If mbed detect doesn't detect your board, you would need to get the fw-loader program from: https://github.com/cypresssemiconductorco/Firmware-loader/releases And run the commad fw-loader.exe --update-kp3 Import the mbed-os-example-wifi example using . The cool thing about mbed is that this same program will work with other boards that have WiFi module. I had used this previously with an STM32 board mbed import mbed - os - example - wifi Configure the SSID and password used to connect, by editing mbed_app.json drwxr-xr-x 7 venkat admin 238 Nov 9 2018 wifi-ism43362 (embed) VsMac2: ~/work/pp/pp_dev/mbed/snips/mbed-os-example-wifi : cat mbed_app.json { \"config\": { \"wifi-ssid\": { \"help\": \"WiFi SSID\", \"value\": \"\\\"VSG1\\\"\" }, \"wifi-password\": { \"help\": \"WiFi Password\", \"value\": \"\\\"YOUR_PASSWORD\\\"\" } }, \"target_overrides\": { \"*\": { \"platform.stdio-convert-newlines\": true } } } Then compile and load the program to the device using. mbed compile -f -m CY8CPROTO_062_4343W -t GCC_ARM Here are some other links that talk about the board. https://iotexpert.com/2019/02/09/cypress-mbed-os/ https://community.cypress.com/community/modustoolbox/blog/2019/03/27/a-wifi-scanner-using-the-mbed-modustoolbox-flow Logs from compiling are ( embed ) VsMac2 : ~/ work / pp / pp_dev / mbed / try / mbed - os - example - wifi : mbed compile - f - m CY8CPROTO_062_4343W - t GCC_ARM [ mbed ] Auto - installing missing Python modules … [ Warning ] @ , : Compiler version mismatch : Have 7.3.1 ; expected version >= 6.0.0 and < 7.0.0 Building project mbed - os - example - wifi ( CY8CPROTO_062_4343W , GCC_ARM ) Scan : mbed - os - example - wifi Compile [ 0.1% ] : except . S Compile [ 0.2% ] : mbed_tz_context . c Compile [ 0.3% ] : rf_configuration . c Compile [ 0.5% ] : MCR20Drv . c Compile [ 0.6% ] : mbed_fault_handler . c Compile [ 0.7% ] : at24mac . cpp Compile [ 0.8% ] : NanostackRfPhyMcr20a . cpp Compile [ 0.9% ] : AnalogIn . cpp Compile [ 1.0% ] : NanostackRfPhyAtmel . cpp Compile [ 1.1% ] : NanostackRfPhys2lp . cpp … … Compile [ 99.1% ] : sleep_api . c Compile [ 99.2% ] : cy_usbfs_dev_drv_io_dma . c Compile [ 99.3% ] : rtc_api . c Compile [ 99.4% ] : trng_api . c Compile [ 99.5% ] : pwmout_api . c Compile [ 99.7% ] : serial_api . c Compile [ 99.8% ] : us_ticker . c Compile [ 99.9% ] : spi_api . c Compile [ 100.0% ] : default_wifi_interface . cpp Link : mbed - os - example - wifi Elf2Bin : mbed - os - example - wifi … … Total Static RAM memory ( data + bss ) : 26576 ( + 26576 ) bytes Total Flash memory ( text + data ) : 555581 ( + 555581 ) bytes Image : . / BUILD / CY8CPROTO_062_4343W / GCC_ARM / mbed - os - example - wifi . hex Logs from the serial console of the device when running the mbed-os-example-wifi. WiFi example Mbed OS version 5.12.3 Scan: Network: subbs_in secured: WPA2 BSSID: E4:95:6E:41:9f:36 RSSI: -60 Ch: 1 Network: subbs_2GEXT secured: WPA2 BSSID: A0:4:60:2a:1b:c4 RSSI: -23 Ch: 1 Network: secured: WPA2 BSSID: 8A:2A:A8:3:bc:a9 RSSI: -80 Ch: 1 Network: SBG secured: WPA2 BSSID: 80:2A:A8:3:bc:86 RSSI: -63 Ch: 1 Network: SBG secured: WPA2 BSSID: 80:2A:A8:3:bc:a9 RSSI: -76 Ch: 1 Network: subbs_tm secured: WPA2 BSSID: E8:8D:28:60:78:29 RSSI: -52 Ch: 6 Network: ParkPaiz secured: WPA2 BSSID: 10:86:8C:20:9a:6 RSSI: -68 Ch: 6 Network: xfinitywifi secured: No:e Bc6:75 RSSI: -61 Ch: 11 Network: VSGo secured: None BSSID: BC:EE:7B:dd:d3:42 RSSI: -56 Ch: 11 Network: ATT4z5JAX7 secured: WPA2 BSSID: F8:2C:18:70:db:72 RSSI: -91 Ch: 11 13 networks available. Connecting to VSG1… Success MAC: 00:9d:6b:67:53:7e IP: 192.168.2.56 Netmask: 255.255.255.0 Gateway: 192.168.2.1 RSSI: -57 Sending HTTP request to www.arm.com… sent 58 [GET / HTTP/1.1] recv 64 [HTTP/1.1 200 OK] Done","tags":"IOT","url":"http://packetp.com/stage/blog/running-wifi-example-on-cy8cproto_062_4343w.html","loc":"http://packetp.com/stage/blog/running-wifi-example-on-cy8cproto_062_4343w.html"},{"title":"WICED : Using command line gdb","text":"Launch openocd in one console \"./tools/OpenOCD/OSX/openocd-all-brcm-libftdi\" -s \"./tools/OpenOCD/scripts\" -f ./tools/OpenOCD/CYW9WCD1EVAL1.cfg -f ./tools/OpenOCD/stm32f4x.cfg -f ./tools/OpenOCD/stm32f4x-flash-app.cfg In another console launch gdb using ./tools/ARM_GNU/bin/OSX/arm-none-eabi-gdb Once you get to the gdb prompt use (gdb) target remote localhost:3333 (gdb) monitor reset halt (gdb) file build/snip.scan-BCM943364WCD1/binary/snip.scan-BCM943364WCD1.elf (gdb) cont Below are logs from gdb and openocd Venkats-MBP-9: ~/work/pp/wiced_6.00_pp/WICED-Studio-6.0/43xxx_Wi-Fi : \"./tools/OpenOCD/OSX/openocd-all-brcm-libftdi\" -s \"./tools/OpenOCD/scripts\" -f ./tools/OpenOCD/CYW9WCD1EVAL1.cfg -f ./tools/OpenOCD/stm32f4x.cfg -f ./tools/OpenOCD/stm32f4x-flash-app.cfg Open On-Chip Debugger 0.10.0-dev-00226-gb7080eca-dirty (2017-08-28-16:10) Licensed under GNU GPL v2 For bug reports, read http://openocd.org/doc/doxygen/bugs.html Info : only one transport option; autoselect 'jtag' trst_and_srst separate srst_nogate trst_push_pull srst_push_pull connect_assert_srst adapter speed: 1000 kHz adapter_nsrst_delay: 100 jtag_ntrst_delay: 100 Warn : target name is deprecated use: 'cortex_m' jtag_init Warn : Using DEPRECATED interface driver 'ft2232' Info : Consider using the 'ftdi' interface driver, with configuration files in interface/ftdi/... Info : max TCK change to: 30000 kHz Info : clock speed 1000 kHz Info : JTAG tap: stm32f4xx.cpu tap/device found: 0x4ba00477 (mfg: 0x23b, part: 0xba00, ver: 0x4) Info : JTAG tap: stm32f4xx.bs tap/device found: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0) Warn : JTAG tap: stm32f4xx.bs UNEXPECTED: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0) Error: JTAG tap: stm32f4xx.bs expected 1 of 1: 0x06413041 (mfg: 0x020, part: 0x6413, ver: 0x0) Error: Trying to use configured scan chain anyway... Warn : Bypassing JTAG setup events due to errors Info : stm32f4xx.cpu: hardware has 6 breakpoints, 4 watchpoints Info : JTAG tap: stm32f4xx.cpu tap/device found: 0x4ba00477 (mfg: 0x23b, part: 0xba00, ver: 0x4) Info : JTAG tap: stm32f4xx.bs tap/device found: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0) Warn : JTAG tap: stm32f4xx.bs UNEXPECTED: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0) Error: JTAG tap: stm32f4xx.bs expected 1 of 1: 0x06413041 (mfg: 0x020, part: 0x6413, ver: 0x0) Error: Trying to use configured scan chain anyway... Warn : Bypassing JTAG setup events due to errors Info : accepting 'gdb' connection on tcp/3333 Info : device id = 0x10006431 Info : flash size = 512kbytes Warn : No RTOS could be auto-detected! Info : JTAG tap: stm32f4xx.cpu tap/device found: 0x4ba00477 (mfg: 0x23b, part: 0xba00, ver: 0x4) Info : JTAG tap: stm32f4xx.bs tap/device found: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0) Warn : JTAG tap: stm32f4xx.bs UNEXPECTED: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0) Error: JTAG tap: stm32f4xx.bs expected 1 of 1: 0x06413041 (mfg: 0x020, part: 0x6413, ver: 0x0) Error: Trying to use configured scan chain anyway... Warn : Bypassing JTAG setup events due to errors stm32f4xx.cpu: target state: halted target halted due to debug-request, current mode: Thread xPSR: 0x01000000 pc: 0x080005a8 msp: 0x2001dcd0 Warn : No RTOS could be auto-detected! Warn : No RTOS could be auto-detected! Error: Unable to wipe mandatory variable: g_pendingtasks - address unknown Venkats-MBP-9 : ~/ work / pp / wiced_6 . 00_pp / WICED-Studio-6 . 0 / 43xxx_Wi-Fi : ./ tools / ARM_GNU / bin / OSX / arm-none-eabi-gdb Python Exception & # 60 ; type 'exceptions.ImportError' & # 62 ; No module named gdb : warning : Could not load the Python gdb module from ` / Users / lab / wiced / Wiced-Tool-Source / ARM_GNU / gdb-build / junk / python '. Limited Python support is available from the _gdb module. Suggest passing --data-directory=/path/to/gdb/data-directory. GNU gdb (GDB) 7.7 Copyright (C) 2014 Free Software Foundation, Inc. License GPLv3+: GNU GPL version 3 or later &#60;http://gnu.org/licenses/gpl.html&#62; This is free software: you are free to change and redistribute it. There is NO WARRANTY, to the extent permitted by law. Type \"show copying\" and \"show warranty\" for details. This GDB was configured as \"--host=x86_64-apple-darwin11.4.0 --target=arm-none-eabi\". Type \"show configuration\" for configuration details. For bug reporting instructions, please see: &#60;http://www.gnu.org/software/gdb/bugs/&#62;. Find the GDB manual and other documentation resources online at: &#60;http://www.gnu.org/software/gdb/documentation/&#62;. For help, type \"help\". Type \"apropos word\" to search for commands related to \"word\". (gdb) Open On-Chip Debugger 0.10.0-dev-00226-gb7080eca-dirty (2017-08-28-16:10) Licensed under GNU GPL v2 For bug reports, read http://openocd.org/doc/doxygen/bugs.html (gdb) target remote localhost:3333 Remote debugging using localhost:3333 0x080005a8 in ?? () (gdb) monitor reset halt JTAG tap: stm32f4xx.cpu tap/device found: 0x4ba00477 (mfg: 0x23b, part: 0xba00, ver: 0x4) JTAG tap: stm32f4xx.bs tap/device found: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0) JTAG tap: stm32f4xx.bs UNEXPECTED: 0x06431041 (mfg: 0x020, part: 0x6431, ver: 0x0) JTAG tap: stm32f4xx.bs expected 1 of 1: 0x06413041 (mfg: 0x020, part: 0x6413, ver: 0x0) Trying to use configured scan chain anyway... Bypassing JTAG setup events due to errors stm32f4xx.cpu: target state: halted target halted due to debug-request, current mode: Thread xPSR: 0x01000000 pc: 0x080005a8 msp: 0x2001dcd0 (gdb) file build/snip.scan-BCM943364WCD1/binary/snip.scan-BCM943364WCD1.elf A program is being debugged already. Are you sure you want to change the file? (y or n) y Reading symbols from build/snip.scan-BCM943364WCD1/binary/snip.scan-BCM943364WCD1.elf...done. (gdb) cont Continuing. &#94;C Program received signal SIGINT, Interrupt. platform_power_down_hook (sleep_ms=1135) at WICED/platform/MCU/STM32F4xx/peripherals/platform_mcu_powersave.c:333 333 } (gdb) info threads Id Target Id Frame * 1 Remote target platform_power_down_hook (sleep_ms=1135) at WICED/platform/MCU/STM32F4xx/peripherals/platform_mcu_powersave.c:333 (gdb) bt Python Exception &#60;type ' exceptions . ImportError ' & # 62 ; No module named gdb . frames : # 0 platform_power_down_hook ( sleep_ms = 1135 ) at WICED / platform / MCU / STM32F4xx / peripherals / platform_mcu_powersave . c : 333 # 1 0x08011508 in tx_low_power_enter () # 2 0x08010e22 in __tx_ts_wait () Backtrace stopped : previous frame identical to this frame ( corrupt stack ?) ( gdb )","tags":"IOT","url":"http://packetp.com/stage/blog/wiced-using-command-line-gdb.html","loc":"http://packetp.com/stage/blog/wiced-using-command-line-gdb.html"},{"title":"Steps to compile and run OpenWRT on Edge Router","text":"Open to access USB drive Need to open up the Edge Router to access the USB drive. It needs to be . Below is picture after opening it up. Be careful when unplugging the USB drive. Hold on to the USB connector, so that there is not much pull on the connector Get Source Clone using git://git.openwrt.org/14.07/openwrt.git Build From the top dir run \"make menuconfig and set target to be Octeon. Pictures showing top dir and Target selection below. Partition The partition of the USB drive looked like below. I probably had partitioned this before. If it doesn't look like below, you want to use fdisk to partition the USB drive. Disk /dev/sdg: 3880 MB, 3880452096 bytes 120 heads, 62 sectors/track, 1018 cylinders, total 7579008 sectors Units = sectors of 1 * 512 = 512 bytes Sector size (logical/physical): 512 bytes / 512 bytes Disk identifier: 0xe9ad0200 Device Boot Start End Blocks Id System /dev/sdg1 2048 292863 145408 c W95 FAT32 (LBA) /dev/sdg2 292864 3710975 1709056 83 Linux Images After the build completes there will be image in in ./bin/octeon directory. cp kernel /media/venkat/0243-8F11/vmlinux Copy the kernel to the first partition cp kernel /media/venkat/0243-8F11/vmlinux Extract rootfs to the second partition. Be very careful hre and choose the right drive and partition for of sudo dd if=./root of=/dev/sdg2 bs=1M Plugin in the USB and boot.","tags":"NETWORKING","url":"http://packetp.com/stage/blog/steps-to-compile-and-run-openwrt-on-edge-router.html","loc":"http://packetp.com/stage/blog/steps-to-compile-and-run-openwrt-on-edge-router.html"},{"title":"WICED : Managing repos","text":"You have evaluated WICED and getting ready to build your own product with WICED. As you are developing code, you will possibly be developing these additional components libraries applications platforms. Cypress does make releases of newer SDK's quite often and usually doesn't port fixes to older SDK's. So it is better to manage your project so that you can easily move to newer SDK's. One way to manage this would be to have a stock version of the WICED SDK in one git repo and all your custom code in another repo. Here is how we mange it. All our code is in a repository called pp_dev. pp_dev/pp_wiced_apps contains all our wiced application. pp_dev/pp_libraries contains all our WICED libraries. Then we have link from WICED SDK repo to pp_dev repo. VsMac2 : ~/ work / pp / wiced / wiced_6 . 2 _mfi / WICED - Studio - 6 . 2 / 43 xxx_Wi - Fi / apps : ls - al total 16 ... lrwxr - xr - x 1 venkat admin 42 Oct 25 07 : 52 pp_wiced_apps -> / Users / venkat / work / pp / pp_dev / pp_wiced_apps drwxr - xr - x 71 venkat admin 2414 Jun 15 2018 snip ..... VsMac2 : ~/ work / pp / wiced / wiced_6 . 2 _mfi / WICED - Studio - 6 . 2 / 43 xxx_Wi - Fi / libraries : ls - al total 8 drwxr - xr - x 16 venkat admin 544 Oct 25 07 : 52 . drwxr - xr - x 31 venkat admin 1054 Nov 29 04 : 38 .. drwxr - xr - x 11 venkat admin 374 Jun 15 2018 audio ... drwxr - xr - x 8 venkat admin 272 Jun 15 2018 ota2_bt_service lrwxr - xr - x 1 venkat admin 42 Oct 25 07 : 52 pp_libraries -> / Users / venkat / work / pp / pp_dev / pp_libraries / drwxr - xr - x 16 venkat admin 544 Jun 15 2018 protocols drwxr - xr - x 3 venkat admin 102 Jun 15 2018 scripting .....","tags":"IOT","url":"http://packetp.com/stage/blog/wiced-managing-repos.html","loc":"http://packetp.com/stage/blog/wiced-managing-repos.html"},{"title":"WICED getting started","text":"What is WICED WICED stands for Wireless Internet Connectivity for Embedded Devices. It is a development system(IDE, SDK) that is used to develop software for Cypress(Formerly Broadcom IoT) based WiFi/Bluetooth devices that are paired with a microcontroller. WICED Install One of the first steps to get started with WICED is to install the SDK. Below is a link to get the latest SDK's and prior versions of the SDK. https://community.cypress.com/community/wiced-wifi/wiced-wifi-documentation.Recently Cypress has added some training videos. which would be a good starting point for learning https://community.cypress.com/community/training-videos/ Hardware Platform You would also need a Hardware Platform that is capable of running the application from the SDK . Below are some recommendations. If your budget allows the 907 is a better choice. CYW43907 Kit : The CYW43907 is a single-chip 802.11n dual-band (2.4GHz and 5GHz) Wi-Fi SoC with a 320MHz ARM Cortex-R4 MCU. Here is a purchase link. https://www.mouser.com/new/cypress-semiconductor/cypress-wiced-cyw43907-kit/ Avnet 4343W : One of the popular WICED hardware reference boards is the AVNET 4343w board. YOu could buy this of Amazon for 50USD. On Amazon.com Search for \"AVNET BCM4343W\" to find this board. Below are some screenshots of the search. Documentation WICED includes documentation with the SDK which has been generated from source using doxygen. The documentation is at $SDK_DIR/doc/API/index.html .After you install the SDK, the project explores shows the doc folder that contains the documentation. Use a different versions of the SDK: When Cypress release a newer version of the SDK's , you don't need to resintall the IDE. You can just use the SDK source. Below blog show how to import a new SDK into the IDE. https://community.cypress.com/community/wiced-wifi/wiced-wifi-forums/blog/2015/08/12/how-to-import-a-wiced-sdk-into-an-existing-wiced-eclipse-ide-2 Creating debug configuration after importing an SDK https://community.cypress.com/community/wiced-wifi/wiced-wifi-forums/blog/2014/05/09/creating-andor-editing-debug-configurations For copy paste convenience here are some strings used in the configuration. On Mac add-symbol-file build/eclipse_debug/last_built.elf 0x8000000 /Users/venkat/WICED/WICED-Studio-4.1/43xxx_Wi-Fi/tools/ARM_GNU/bin/OSX/arm-none-eabi-gdb /Users/venkat/WICED/WICED-Studio-4.1/43xxx_Wi-Fi/build/eclipse_debug/last_built.elf. ${ workspace_loc : / 43 xxx_Wi - Fi / build / eclipse_debug / last_built . elf } ${ workspace_loc : / 43 xxx_Wi - Fi / tools / ARM_GNU / bin / OSX / arm - none - eabi - gdb } ${ workspace_loc : / 43 xxx_Wi - Fi / build / eclipse_debug / last_built . elf } ${ workspace_loc : / 43 xxx_Wi - Fi / build / eclipse_debug / last_built . elf }","tags":"IOT","url":"http://packetp.com/stage/blog/wiced-getting-started.html","loc":"http://packetp.com/stage/blog/wiced-getting-started.html"}]};