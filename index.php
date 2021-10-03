<?php

session_start();
include_once "function/connection.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, viewport-fit=cover"
    />
    <title>Learn Coding | HIMTI</title>
    <meta name="theme-color" content="#333333" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-title" content="HIMTI KIT" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta
      name="description"
      content="HIMTI KIT adalah kit pembelajaran untuk para mahasiswa baru School of Computer Science Universitas Bina Nusantara. Konten tersedia mulai dari materi semester 1 s.d 4, dan dapat diakses secara daring melalui situs ini."
    />
    <meta name="keywords" content="HIMTI KIT" />
    <meta name="author" content="HIMTI Web Division" />
    <link href="css/style.css" type="text/css" rel="stylesheet prerender" />
    <link
      href="https://unpkg.com/aos@2.3.1/dist/aos.css"
      rel="stylesheet preconnect"
    />

    <style>
      #menu-toggle:checked + #menu {
        display: block;
      }
    </style>
  </head>
  <body class="bg-darkblue antialiased relative">
    <div id="particles-js"></div>
    <!-- Start Header -->
    <header
      class="
        right-0
        left-0
        px-5
        w-full
        lg:px-16
        flex flex-wrap
        items-center
        lg:py-0
        py-2
        container
        mx-auto
        z-50
      "
      id="navbar"
    >
      <div class="flex-1 flex justify-between items-center">
        <a href="#">
          <img
            class="w-20 md:w-24 lg:w-28"
            src="./images/HIMTI-PUTIH-min 1.png"
            alt="logo"
          />
        </a>
      </div>

      <label for="menu-toggle" class="cursor-pointer lg:hidden block">
        <svg
          height="20"
          viewBox="0 -53 384 384"
          width="20"
          xmlns="http://www.w3.org/2000/svg"
          class="fill-current text-white"
        >
          <path
            d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
          />
          <path
            d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
          />
          <path
            d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
          />
        </svg>
      </label>
      <input type="checkbox" class="hidden" id="menu-toggle" />
      <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
        <nav>
          <ul
            class="
              lg:flex
              items-center
              justify-between
              text-base text-white
              pt-4
              md:pt-0
              text-center
              mx-auto
            "
          >
            <li>
              <a href="#" class="nav-list">Home</a>
            </li>
            <li>
              <a href="#" class="nav-list">About Us</a>
            </li>
            <li>
              <a href="#" class="nav-list text-red-300">Learn Coding</a>
            </li>
            <li>
              <a href="#" class="nav-list">Tell Us</a>
            </li>
            <li>
              <a href="#" class="nav-list">Events</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Start Header -->
    <!-- Start Hero -->
    <div class="wrapper" data-aos="fade-up" data-aos-delay="1000">
      <a href="login.php" noreferrer noopener class="cursor-pointer">
        <img
        src="./images/hero-banner.png"
        alt="hero-banner"
        class="hero-image"
        />
      </a>
    </div>
    <!-- Start Hero -->

    <!-- Start Playlist -->
    <div class="wrapper text-center" data-aos="fade-up" data-aos-delay="200">
      <h1 class="text-white text-3xl lg:text-5xl font-extrabold">
        PLAYLIST RESPONSI
      </h1>
      <hr class="w-1/3 text-white mt-3 border-white border-2" />
    </div>
    <div class="wrapper-res">
      <a
        href="https://www.youtube.com/watch?v=hxMH6ADZD1k&list=PLB2GiO0mMjw_fuCEGZTdWVDWfjmEUnwr6"
        rel="noreferrer noopener"
        target="_blank"
        title="responsi-1"
        data-aos="flip-left"
        data-aos-delay="100"
      >
        <img
          src="./images/responsi-1.png"
          alt="responsi-playlist"
          class="img-default"
        />
        <h1 class="text-default">
          Responsi UAS Semester Ganjil<br />
          Tahun Ajaran 2019/2020
        </h1>
      </a>
      <a
        href="https://www.youtube.com/watch?v=N_JGkSXzhiY&list=PLB2GiO0mMjw-0IYAjiOSPELsU4DK82141"
        rel="noreferrer noopener"
        target="_blank"
        title="responsi-2"
        data-aos="flip-up"
        data-aos-delay="200"
      >
        <img
          src="./images/responsi-2.png"
          alt="responsi-playlist"
          class="img-default"
        />
        <h1 class="text-default">
          Responsi UTS Semester Ganjil<br />
          Tahun Ajaran 2020/2021
        </h1>
      </a>
      <a
        href="https://www.youtube.com/watch?v=3iBi2s7wSSM&list=PLB2GiO0mMjw_yLPEeXISeTB0eozQLh6oU"
        rel="noreferrer noopener"
        target="_blank"
        title="responsi-3"
        data-aos="flip-right"
        data-aos-delay="300"
      >
        <img
          src="./images/responsi-3.png"
          alt="responsi-playlist"
          class="img-default"
        />
        <h1 class="text-default">
          Responsi UAS Semester Ganjil<br />
          Tahun Ajaran 2019/2020
        </h1>
      </a>
    </div>
    <!-- End Playlist -->

    <!-- Start Tutorial -->
    <div class="wrapper text-center" data-aos="fade-up" data-aos-delay="200">
      <h1 class="text-white text-3xl lg:text-5xl font-extrabold">
        PLAYLIST TUTORIAL
      </h1>
      <hr class="w-1/3 text-white mt-3 border-white border-2 mb-6" />
    </div>
    <div class="wrapper-res">
      <a
        href="https://www.youtube.com/watch?v=sRZ2jPgRyFA&list=PLB2GiO0mMjw-yiUANYbpp92QTNoBGhYFI"
        rel="noreferrer noopener"
        target="_blank"
        title="tutorial-1"
        data-aos="flip-left"
        data-aos-delay="100"
      >
        <img
          src="./images/tutorial-1.png"
          alt="responsi-playlist"
          class="img-default"
        />
        <h1 class="text-default">HIMTI TUTOR HCI</h1>
      </a>
      <a
        href="https://www.youtube.com/watch?v=BMyEsUOPxek&list=PLB2GiO0mMjw-6xnfoBj83WhZjd4XI2xrx"
        rel="noreferrer noopener"
        target="_blank"
        title="tutorial-2"
        data-aos="flip-up"
        data-aos-delay="200"
      >
        <img
          src="./images/tutorial-2.png"
          alt="responsi-playlist"
          class="img-default"
        />
        <h1 class="text-default">HIMTI TUTOR 2021</h1>
      </a>
      <a
        href="https://www.youtube.com/watch?v=3iBi2s7wSSM&list=PLB2GiO0mMjw_yLPEeXISeTB0eozQLh6oU"
        rel="noreferrer noopener"
        target="_blank"
        title="tutorial-3"
        data-aos="flip-right"
        data-aos-delay="300"
      >
        <img
          src="./images/tutorial-3.png"
          alt="responsi-playlist"
          class="img-default"
        />
        <h1 class="text-default">HIMTI TUTOR UTS 2021</h1>
      </a>
    </div>
    <!-- End Tutorial -->

    <!-- Start Software -->
    <div
      class="wrapper text-center my-10"
      data-aos="fade-up"
      data-aos-delay="300"
    >
      <h1 class="text-white text-3xl lg:text-5xl font-extrabold">SOFTWARE</h1>
      <hr class="w-1/3 text-pink-600 mt-3 border-pink-600 border-2 mb-6" />
    </div>
    <div
      class="
        container
        mx-auto
        grid
        sm:grid-cols-2 sm:grid-rows-6 sm:gap-x-5
        md:grid-cols-3 md:grid-rows-4 md:gap-x-6
        lg:grid-cols-4 lg:grid-rows-3
        gap-y-5
        px-5
      "
      data-aos="fade-up"
      data-aos-delay="300"
    >
      <a
        href="#"
        title="binus-mobile"
        rel="noreferrer noopener"
        class="icon-bg"
      >
        <picture>
          <source type="image/webp" srcset="./images/icon/bimob.webp" />
          <source type="image/png" srcset="./images/icon/bimob.png" />

          <img
            src="./images/icon/bimob.png"
            alt="bimob-icon"
            class="icon-img"
          />
        </picture>
        <h1 class="icon-default">BINUS MOBILE<br />For Students</h1>
      </a>
      <a href="https://www.oracle.com/java/technologies/downloads/" title="java" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/java.webp" />
          <source type="image/png" srcset="./images/icon/java.png" />
          <img src="./images/icon/java.png" alt="java-icon" class="icon-img" />
        </picture>
        <h1 class="icon-default">Java JDK</h1>
      </a>
      <a href="https://www.bloodshed.net/" title="DEV C" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/devc.webp" />
          <source type="image/png" srcset="./images/icon/devc.png" />

          <img src="./images/icon/devc.png" alt="dev-icon" class="icon-img" />
        </picture>
        <h1 class="icon-default">DEV C++<br />(Orwell)</h1>
      </a>
      <a href="https://atom.io/" title="ATOM" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/atom.webp" />
          <source type="image/png" srcset="./images/icon/atom.png" />
          <img src="./images/icon/atom.png" alt="atom-icon" class="icon-img" />
        </picture>
        <h1 class="icon-default">ATOM</h1>
      </a>
      <a href="https://www.microsoft.com/en-us/microsoft-teams/download-app" title="MS-Team" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/msteam.webp" />
          <source type="image/png" srcset="./images/icon/msteam.png" />
          <img
            src="./images/icon/msteam.png"
            alt="msteam-icon"
            class="icon-img"
          />
        </picture>
        <h1 class="icon-default">
          Microsoft<br />
          Teams
        </h1>
      </a>
      <a href="https://outlook.live.com/owa/" title="M Outlook" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/outlook.webp" />
          <source type="image/png" srcset="./images/icon/outlook.png" />
          <img
            src="./images/icon/outlook.png"
            alt="outlook-icon"
            class="icon-img"
          />
        </picture>
        <h1 class="icon-default">
          Microsoft<br />
          Outlook
        </h1>
      </a>
      <a href="https://www.python.org/downloads/" title="Python" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/python.webp" />
          <source type="image/png" srcset="./images/icon/python.png" />
          <img
            src="./images/icon/python.png"
            alt="python-icon"
            class="icon-img"
          />
        </picture>
        <h1 class="icon-default">Python</h1>
      </a>
      <a href="https://nodejs.org/en/download/" title="Node.Js" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/node.webp" />
          <source type="image/png" srcset="./images/icon/node.png" />
          <img src="./images/icon/node.png" alt="node-icon" class="icon-img" />
        </picture>
        <h1 class="icon-default">Node</h1>
      </a>
      <a href="https://www.eclipse.org/downloads/" title="ECLIPSE" rel="noreferrer noopener" class="icon-bg">
        <source
          type="image/webp"
          srcset="./images/icon/eclipse_adobespark.webp"
        />
        <source
          type="image/png"
          srcset="./images/icon/eclipse_adobespark.png"
        />
        <img
          src="./images/icon/eclipse_adobespark.png"
          alt="eclipse-icon"
          class="icon-img"
        />
        <h1 class="icon-default">Eclipse</h1>
      </a>
      <a href="https://developer.apple.com/xcode/" title="xcode" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/xcode.webp" />
          <source type="image/png" srcset="./images/icon/xcode.png" />
          <img
            src="./images/icon/xcode.png"
            alt="xcode-icon"
            class="icon-img"
          />
        </picture>
        <h1 class="icon-default">Xcode</h1>
      </a>
      <a href="https://www.geany.org/" title="Geany" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/ico" srcset="./images/icon/geany.ico" />
          <img
            src="./images/icon/geany.ico"
            alt="geany-icon"
            class="icon-img"
          />
        </picture>
        <h1 class="icon-default">Geany</h1>
      </a>
      <a href="https://code.visualstudio.com/" title="VS code" rel="noreferrer noopener" class="icon-bg">
        <picture>
          <source type="image/webp" srcset="./images/icon/vscode.webp" />
          <source type="image/png" srcset="./images/icon/vscode.png" />
          <img
            src="./images/icon/vscode.png"
            alt="vscode-icon"
            class="icon-img"
          />
        </picture>
        <h1 class="icon-default">VS Code</h1>
      </a>
    </div>
    <!-- End Software -->

    <!-- Start Maps -->
    <div class="wrapper-maps py-12">
      <div
        class="container flex justify-center mx-auto lg:px-0"
        data-aos="fade-up"
        data-aos-delay="300"
      >
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.920091166383!2d106.7854095!3d-6.2002269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe18cf42b220d8e7d!2sBINUS%20University%2C%20Kampus%20Syahdan!5e0!3m2!1sen!2sid!4v1625109493227!5m2!1sen!2sid"
          style="border: 0"
          width="500"
          height="400"
          allowfullscreen
          loading="lazy"
        ></iframe>
      </div>
      <div
        class="container mx-auto lg:px-5"
        data-aos="fade-up"
        data-aos-delay="300"
      >
        <div
          class="
            flex flex-row
            mx-auto
            justify-center
            items-center
            lg:justify-start
            container
            py-5
          "
        >
          <img src="./images/image 11.svg" alt="location icon" />
          <h1 class="text-white font-semibold text-2xl px-5 self-center">
            Location
          </h1>
        </div>
        <h1 class="font-extrabold text-2xl text-white text-center lg:text-left">
          BINUS @ Kemanggisan
        </h1>
        <p class="text-white font-bold text-lg text-center lg:text-left">
          Jl. Kyai H. Syahdan No.9, RW.12, Palmerah, Kec. Palmerah, Kota Jakarta
          Barat, Daerah Khusus Ibukota Jakarta 11480
        </p>
      </div>
    </div>
    <!-- End Maps -->

    <hr class="w-full md:w-10/12 mx-auto border-white border-2 mb-6 md:mb-0" />
    <footer
      class="
        flex flex-row
        justify-between
        items-center
        md:w-10/12
        w-full
        mx-auto
        container
      "
    >
      <div class="container mx-auto mb-0">
        <img src="./images/footer-logo.png" alt="footer-logo" />
      </div>
      <div class="container mx-auto flex flex-col self-center inset-y-0">
        <div class="flex flex-row justify-end">
          <span class="flex flex-col md:flex-row">
            <a href="">
              <img
                src="./images/mail.png"
                alt="footer-mail"
                class="footer-icon"
              />
            </a>
            <a href="">
              <img
                src="./images/twitter.png"
                alt="footer-twitter"
                class="footer-icon"
              />
            </a>
          </span>
          <span class="flex flex-col md:flex-row">
            <a href="">
              <img
                src="./images/instagram.png"
                alt="footer-instagram"
                class="footer-icon"
              />
            </a>
            <a
              href="
            "
            >
              <img
                src="./images/youtube.png"
                alt="footer-youtube"
                class="footer-icon"
              />
            </a>
          </span>
        </div>
        <p class="text-white text-base text-right">
          © Copyright HIMTI BINUS University. All righst reserved
        </p>
      </div>
    </footer>
    <script src="./particles.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      particlesJS.load("particles-js", "particlejs.json", function () {
        console.log("particles.json loaded");
      });
    </script>
  </body>
</html>
