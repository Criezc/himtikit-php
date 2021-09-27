<?php
include_once "function/connection.php";
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
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
        <h1 class="text-white font-bold text-5xl">HIMTI KIT 2021</h1>
      </div>

      <div class="wrapper mt-5">
        <img
          src="./images/hero-banner.png"
          alt="hero-banner"
          class="w-1/2 justify-center flex animate-pulse"
        />
      </div>

      <div class="text-center flex justify-center">
        <h1 class="text-white font-bold text-2xl">
          The perfect starter kit for your study in day-to-day basis
        </h1>
      </div>

      <div
        class="container mx-auto flex flex-col justify-center align-middle mt-5"
      >
        <h2 class="text-white text-center text-xl font-bold">
          Insert your student ID number (NIM) to continue
        </h2>
        <form action="" method="POST">
          <div class="flex justify-center text-center mt-5 mb-6">
            <input
              type="text"
              class="
                w-1/3
                text-center
                rounded-3xl
                text-gray-900
                placeholder-gray-700
                bg-white
                outline-none
                p-3
                mr-5
              "
              placeholder="Input NIM"
              name="nimuser"
            />
            <input
              type="submit"
              class="
                border-2
                text-white
                lg:w-1/12
                cursor-pointer
                font-bold
                text-base
                font-serif
                rounded-3xl
                hover:bg-green-700
                outline-none
                transition
                duration-200
                transform
                hover:-translate-y-1
              "
              name="login"
              value="Continue"
              />
          </div>
        </form>
        <?php

if (isset($_POST['login'])) {
    include "function/connection.php";
    $nim = $_POST['nimuser'];
    if ($nim == '') {

    } else if (is_numeric($nim)) {
        $check = mysqli_query($koneksi, "SELECT * FROM tb_nim WHERE NIM = '$nim'");
        $row = mysqli_num_rows($check);
        echo "<p class='container mx-auto text-xl mt-10 font-bold' style='display:flex;justify-content:center;color:red;text-align:center;'>
        " . $nim . "</p>";
        if ($row === 1) {
            //start login process
            $fetch = mysqli_fetch_assoc($check);
            $check_nim = $fetch['NIM'];
            if ($check_nim != $nim) {
                echo "<p class='container mx-auto text-xl mt-10 font-bold' style='display:flex;justify-content:center;color:red;text-align:center;'>
                NIM Wrong</p>";
            } else {
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $fetch['NIM'];
                $_SESSION['Name'] = $fetch['username'];
                header('Location: main.php');
                exit;
            }
        } else {
            echo "<p class='container mx-auto text-xl mt-10 font-bold' style='display:flex;justify-content:center;color:red;text-align:center;'>NIM Not Found</p>";
        }

    } else {
        echo "<p class='container mx-auto text-xl mt-10 font-bold' style='display:flex;justify-content:center;color:red;text-align:center;'>NIM must be numerical</p>";
    }

}

?>
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
</html>
