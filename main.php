<?php
session_start();
include_once "function/connection.php";
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    header('Location: login.php');
}
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
  </head>
  <body class="bg-darkblue antialiased">
    <div id="particles-js"></div>

    <div class="wrapper w-full mt-32">
      <div class="text-center flex justify-center">
        <h1 class="text-white font-bold text-5xl">Take your Himti Kit</h1>
      </div>
      <hr class="w-1/3 text-white mt-3 border-white border-2" />
      <div class="text-center flex justify-center">
        <p class="text-white font-bold text-xl">Hi,
        <?php
echo $_SESSION['Name'];
?>
        |<a href="logout.php">LOG OUT</a> </p>
      </div>
    </div>

    <div class="container mx-auto flex flex-row justify-around mt-40">
      <div class="flex flex-row">
        <div
          class="
            bg-darkerblue
            w-60
            h-40
            flex
            justify-center
            text-center
            items-center
            rounded-3xl
            mx-10
            cursor-pointer
            transition
            transform
            hover:-translate-y-2
            duration-200
          "
        >
          <div class="flex justify-center align-middle items-center">
            <a
              href="/files/RANGKUMAN-DISCRETE.zip"
              download
              class="text-white text-lg font-bold text-center items-center"
              >Math Discrete</a
            >
          </div>
        </div>
      </div>
      <div class="flex flex-row">
        <div
          class="
            bg-darkerblue
            w-60
            h-40
            flex
            justify-center
            text-center
            items-center
            rounded-3xl
            mx-10
            cursor-pointer
            transition
            transform
            hover:-translate-y-2
            duration-200
          "
        >
          <div class="flex justify-center align-middle items-center">
            <a
              href="/files/RANGKUMAN-ALJABAR.zip"
              download
              class="text-white text-lg font-bold text-center items-center"
              >Algebra</a
            >
          </div>
        </div>
      </div>
      <div class="flex flex-row">
        <div
          class="
            bg-darkerblue
            w-60
            h-40
            flex
            justify-center
            text-center
            items-center
            rounded-3xl
            mx-10
            cursor-pointer
            transition
            transform
            hover:-translate-y-2
            duration-200
          "
        >
          <div class="flex justify-center align-middle items-center">
            <a
              href="/files/Rangkuman-Linear.zip"
              download
              class="text-white text-lg font-bold text-center items-center"
              >Linear Algebra</a
            >
          </div>
        </div>
      </div>

      <div class="flex flex-row">
        <div
          class="
            bg-darkerblue
            w-60
            h-40
            flex
            justify-center
            text-center
            items-center
            rounded-3xl
            mx-10
            cursor-pointer
            transition
            transform
            hover:-translate-y-2
            duration-200
          "
        >
          <div class="flex justify-center align-middle items-center">
            <a
              href="/files/Computer-Security-Fundamental.zip"
              download=""
              class="text-white text-lg font-bold text-center items-center"
              >Computer-Security-Fundamental</a
            >
          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto flex flex-row justify-around mt-40 mb-20">
      <div class="flex flex-row">
        <div
          class="
            bg-darkerblue
            w-60
            h-40
            flex
            justify-center
            text-center
            items-center
            rounded-3xl
            mx-10
            cursor-pointer
            transition
            transform
            hover:-translate-y-2
            duration-200
          "
        >
          <div class="flex justify-center align-middle items-center">
            <a
              href="files/Game-Design.zip"
              download=""
              class="text-white text-lg font-bold text-center items-center"
              >Game Design</a
            >
          </div>
        </div>
      </div>
      <div class="flex flex-row">
        <div
          class="
            bg-darkerblue
            w-60
            h-40
            flex
            justify-center
            text-center
            items-center
            rounded-3xl
            mx-10
            cursor-pointer
            transition
            transform
            hover:-translate-y-2
            duration-200
          "
        >
          <div class="flex justify-center align-middle items-center">
            <a
              href="/files/RANGKUMAN PDM.zip"
              download
              class="text-white text-lg font-bold text-center items-center"
              >PDM</a
            >
          </div>
        </div>
      </div>
      <div class="flex flex-row">
        <div
          class="
            bg-darkerblue
            w-60
            h-40
            flex
            justify-center
            text-center
            items-center
            rounded-3xl
            mx-10
            cursor-pointer
            transition
            transform
            hover:-translate-y-2
            duration-200
          "
        >
          <div class="flex justify-center align-middle items-center">
            <a
              href="/files/Rangkuman-AlgoProg.zip"
              download
              class="text-white text-lg font-bold text-center items-center"
              >Algorithm & Programming</a
            >
          </div>
        </div>
      </div>

      <div class="flex flex-row">
        <div
          class="
            bg-darkerblue
            w-60
            h-40
            flex
            justify-center
            text-center
            items-center
            rounded-3xl
            mx-10
            cursor-pointer
            transition
            transform
            hover:-translate-y-2
            duration-200
          "
        >
          <div class="flex justify-center align-middle items-center">
            <a
              href="/files/Mobile-Creative-Design.zip"
              download
              class="text-white text-lg font-bold text-center items-center"
              >Mobile Creative Design</a
            >
          </div>
        </div>
      </div>
    </div>

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
