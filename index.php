<?php 

	$con = mysqli_connect('localhost','root');
	if($con)

	mysqli_select_db($con,'formularz');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="UTF-8" /> -->
  <meta http-equiv="X-UA-Compatible"
        content="IE=edge" />
  <meta name="viewport"
        content="width=debicce-width, initial-scale=1.0" />

  <link rel="preconnect"
        href="https://fonts.googleapis.com" />
  <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;700&display=swap"
        rel="stylesheet" />

  <link rel="stylesheet"
        href="porownanie.css" />
  <link rel="stylesheet"
        href="stronaglownaitp.css" />
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />

  <title>Microcontrollers</title>
</head>

<body>
  <header class="naglowek">
    <p class="tekstnaglowek">Life is easier because of Microcontrollers</p>
    <nav class="glowna-nawigacja">
      <ul class="glowna-nawigacja-lista">
        <li>
          <a class="glowna-nawigacja-link"
             href="#sekcja1">Comparison </a>
        </li>
        <li>
          <a class="glowna-nawigacja-link"
             href="#sekcja2">Microcontrollers
          </a>
        </li>
        <li>
          <a class="glowna-nawigacja-link"
             href="#sekcja3">Microprocessors</a>
        </li>
        <li>
          <a class="glowna-nawigacja-link"
             href="#sekcja4">Microcomputers</a>
        </li>
        <li>
          <a class="glowna-nawigacja-link nav-quiz"
             href="http://localhost/quiz1/index.php">Quiz</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="stronaglowna">
      <div class="podzial">
        <div class="startowytekst">
          <h1 class="tytul">
            Microcontrollers, Microprocessors and Microcomputers
          </h1>
          <p class="opis">
            This is site about microcontrollers, microprocessors and
            microcomputers. Here you can get known with the basic parameters
            and prices of different type devices.
          </p>
          <a href="#sekcja2"
             class="przycisk przycisk--full marginezprawy">Get known with microcontrollers</a>
          <a href="#sekcja1"
             class="przycisk przycisk--notfull">Learn more &darr;</a>
          <div class="systemiki">
            <div class="zdjeciasystemiki">
              <img src="min1.png"
                   alt="mikrophoto" />
              <img src="min2.png"
                   alt="mikrophoto" />
              <img src="min3.png"
                   alt="mikrophoto" />
            </div>
            <p class="tekstsystemiki">
              Find key informations about different type devices
            </p>
          </div>
        </div>

        <div class="startowezdjecie">
          <img src="mikro1.jpg"
               class="startowezdjecie1"
               alt="microcontrollers" />
        </div>
      </div>
    </section>
    <section class="porownanie"
             id="sekcja1">
      <p class="autorzy">
        Made by Wojciech Michalik and Sebastian Laszkowski
      </p>

      <div class="container">
        <span class="podnaglowek">Comparison</span>
        <h2 class="porownanienaglowek">Comparison of the devices</h2>
      </div>
      <div class="container grid grid--2-cols">
        <div class="tekstbox">
          <p class="numer-urzadzenie">01</p>
          <h3 class="nazwaurz">Microprocessors</h3>
          <p class="opisurz">
            A <strong>microprocessor</strong> is a programmable, multipurpose device that incorporates the functions
            of a CPU (central processing unit) on a single IC (integrated circuit).It's essentially the engine or the
            brain of the computer that goes into motion when the computer is switched on.
          </p>
        </div>
        <div class="zdjeciebox">
          <img src="comparison1.jpg"
               class="zdjecie" />
        </div>

        <div class="zdjeciebox">
          <img src="micocon.jpg"
               class="zdjecie" />
        </div>

        <div class="tekstbox">
          <p class="numer-urzadzenie">02</p>
          <h3 class="nazwaurz">Microcontrollers</h3>
          <p class="opisurz">
            A <strong>microcontroller</strong> is a small computer on a single integrated circuit chip. A
            microcontroller typically
            contains one or more processor cores, along with additional peripherals (memory, serial interface, timer,
            programmable I/O peripherals, etc.) on the same chip. Microcontrollers are used in a wide array of systems
            and devices like microwave ovens, washers and dryers, security systems etc. Devices often utilize multiple
            microcontrollers that work together within
            the device to
            handle
            their respective tasks.
          </p>
        </div>

        <div class="tekstbox">
          <p class="numer-urzadzenie">03</p>
          <h3 class="nazwaurz">Microcomputers</h3>
          <p class="opisurz">
          As a microcontroller contains a microprocessor. In the same way: a <strong>microcomputer</strong> contains a microprocessor as well. 
          Some microcomputers may also contain built-in microcontrollers (Raspberry Pi). 
          Microcomputers are just like regular computers, except they pack everything in the smallest possible space
          - often with the use of system on a chip exactly like microntrollers. The difference is that they are bigger, 
          microcomputers are generally meant to run a Operating System, 
          so they will often rely on external RAM and ROM, 
          and use common peripherals such as USB or Ethernet.
          </p>
        </div>

        <div class="zdjeciebox">
          <img src="rasberry.jpg"
               class="zdjecie" />
        </div>
      </div>
    </section>
    <section class="microcon-sekcja"
             id="sekcja2">
      <div class="container center-text">
        <span class="podnaglowek">Sample microprocessors</span>
        <h2 class="porownanienaglowek">
          Microprocessors and their parameters
        </h2>
      </div>
      <div class="container grid grid--3-cols">
        <div class="microcon">
          <img src="MC6808P.png"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria1">microprocessor</span>
            </div>
            <p class="microcon-nazwa">Motorola MC6808P </p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span> none</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span> 1 MHz</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span>52.07 mm x 15.24 mm </span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>5 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$31.5</span>
              </li>
              <a class="microcon-link"
                 href="https://www.cpu-world.com/CPUs/680x/Motorola-MC6808P.html">Check for more details ...</a>
            </ul>
          </div>
        </div>

        <div class="microcon">
          <img src="W65C02S6TPLG-14.png"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria1">microprocessor</span>
            </div>
            <p class="microcon-nazwa">WDC W65C02S6TPLG-14</p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span> none </span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span> 14 MHz</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span>20 mm x 18 mm</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>1.8 V to 5 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$12</span>
              </li>
              <a class="microcon-link"
                 href="https://pl.mouser.com/ProductDetail/Western-Design-Center-WDC/W65C02S6TPLG-14?qs=sGAEpiMZZMsk5yEqv3Bk8YK9LsvhE2jzD0gPgZkOTnU%3D">Check
                for more details ...</a>
            </ul>
          </div>
        </div>

        <div class="microcon">
          <img src="NPX.png"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria1">microprocessor</span>
            </div>
            <p class="microcon-nazwa">NXP MC7447ATHX1167NB</p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span> none</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span> 1.167 GHz</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span> 8.51 mm × 9.86 mm</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>1.1 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$1200</span>
              </li>
              <a class="microcon-link"
                 href="https://pl.mouser.com/ProductDetail/NXP-Semiconductors/MC7447ATHX1167NB?qs=sGAEpiMZZMsk5yEqv3Bk8W3%2FK0CnoYvX8R23sQkrkIU%3D">Check
                for more details ...</a>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="microproc-sekcja"
             id="sekcja3">
      <div class="container center-text">
        <span class="podnaglowek">Sample microcontrollers</span>
        <h2 class="porownanienaglowek">
          Microcontrollers and their parameters
        </h2>
      </div>
      <div class="container grid grid--3-cols">
        <div class="microproc">
          <img src="arduino.jpg"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria2">microcontroller</span>
            </div>
            <p class="microcon-nazwa">Arduino TIAN A000116</p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span>32kB (DDR2), 64MB (SRAM)</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span>48 MHz (AR9342) and 560 MHz(SAMD21) </span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span>53 mm x 68.5 mm</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>3.3 V and 5 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$95</span>
              </li>
              <a class="microcon-link"
                 href="https://pl.mouser.com/ProductDetail/Arduino/A000116?qs=5aG0NVq1C4yAiWiIle%2FkPA%3D%3D">Check for
                more details ...</a>
            </ul>
          </div>
        </div>

        <div class="microproc">
          <img src="DSPIC33CK64MP102.png"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria2">microcontroller</span>
            </div>
            <p class="microcon-nazwa">DSPIC33CK64MP102</p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span> 8 kB (SRAM)</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span>100 MHz</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span>10.2 mm x 5.3 mm</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>3 V to 3.6 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$3.5</span>
              </li>
              <a class="microcon-link"
                 href="https://pl.mouser.com/ProductDetail/Microchip-Technology/dsPIC33CK64MP102-E-SS?qs=vLWxofP3U2zzmrLtnivgVQ%3D%3D">Check
                for more details ...</a>
            </ul>
          </div>
        </div>

        <div class="microproc">
          <img src="STM.png"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria2">microcontroller</span>
            </div>
            <p class="microcon-nazwa">STM32 NUCLEO-F411RE</p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span>128kB (SRAM)</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span>100 MHz </span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span>72 mm x 51 mm</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>up to 5 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$16</span>
              </li>
              <a class="microcon-link"
                 href="https://botland.com.pl/stm32-nucleo/3363-stm32-nucleo-f411re-stm32f411re-arm-cortex-m4-5904422331764.html">Check for more details ...</a>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="microcon-sekcja"
             id="sekcja4">
      <div class="container center-text">
        <span class="podnaglowek">Sample microcomputers</span>
        <h2 class="porownanienaglowek">
          Microcomputers and their parameters
        </h2>
      </div>
      <div class="container grid grid--3-cols">
        <div class="microcon">
          <img src="rasber.jpg"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria3">microcomputer</span>
            </div>
            <p class="microcon-nazwa">RASPBERRY PI 4 Model B</p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span> 2GB, 4GB, or 8GB (RAM)</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span>1.5 GHz</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span>56.5 mm x 85.6 mm</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>5 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$95</span>
              </li>
              <a class="microcon-link"
                 href="https://pl.mouser.com/new/raspberry-pi/raspberry-pi-4-b/">Check for more details ...</a>
            </ul>
          </div>
        </div>

        <div class="microcon">
          <img src="cebula.png"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria3">microcomputer</span>
            </div>
            <p class="microcon-nazwa">Onion Omega2+</p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span> 128 MB (RAM)</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span>580 MHz</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span>42.9mm x 26.4mm</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>3.3 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$27</span>
              </li>
              <a class="microcon-link"
                 href="https://pl.mouser.com/ProductDetail/Onion/OM-O2P?qs=j%252B1pi9TdxUZwq9NawX9MnA%3D%3D">Check for more details ...</a>
            </ul>
          </div>
        </div>

        <div class="microcon">
          <img src="banan.png"
               class="microcon-img" />
          <div class="microcon-con">
            <div class="microcon-tag">
              <span class="kategoria3">microcomputer</span>
            </div>
            <p class="microcon-nazwa">Banana Pi M3</p>
            <ul class="microcon-parameters">
              <li class="microcon-parameter">
                <i class="bi bi-memory"></i>
                <span>2 GB (RAM)</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-cpu"></i><span>2 GHz</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-aspect-ratio"></i>
                <span>92mm x 60 mm</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-lightning"></i>
                <span>5 V</span>
              </li>
              <li class="microcon-parameter">
                <i class="bi bi-tag"></i>
                <span>$100</span>
              </li>
              <a class="microcon-link"
                 href="https://botland.com.pl/produkty-wycofane/5022-banana-pi-m3-2gb-ram-8gb-emmc-octa-core-wifi-gniazdo-microusb.html">Check for more details ...</a>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="formularz">
      <div class="container">
        <div class="box">
          <div class="box-text-box">
            <h2 class="naglowek-box">Write to us </h2>
            <p class="box-text">
              If you have any question about any informations about mentioned types of devices.
              <strong>Leave us your email for future contact!</strong>
            </p>

            <form class="box-form"
                  action="formularz.php"
                  method="post">
              <div>
                <label for="username">Name</label>
                <input placeholder="John"
                       id="username" 
                       type="text"
                       name="username"/>
              </div>
              <div>
                <label for="email">Email address</label>
                <input placeholder="me@example.com"
                       id="email" 
                       type="text"
                       name="email"/>
              </div>
              <button class="button przycisk--form"
                      type="submit">Sign up now</button>
            </form>
          </div>
          <div class="box-img-box"></div>
        </div>
      </div>
    </section>
  </main>
  <script type="module"
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>