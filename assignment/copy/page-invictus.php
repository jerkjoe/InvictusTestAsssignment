<?php /* Template Name: invictus */ ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="home-favicon.ico" type="image/x-icon">
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
  <!-- <script src="main.js"></script> -->
</head>
<style>
  * {
    padding: 0;
    margin: 0;
    text-decoration: none;
    font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
    line-height: 1.4;
  }

  img {
    width: 100%;
  }

  header {
    padding: 40px 0;
  }

  .logo-area {
    width: 28%;
    margin: 0 auto;
  }

  .intro {
    color: #7F7F7F;
    width: 60%;
    margin: 40px auto 0;
    text-align: center;
    font-size: 16px;
  }
  .core-services {
    background-color: #000;
    padding: 60px;
  }
  .image-wrapper {
    margin: 0 auto;
    width: 62%;
  }
  footer {
    padding: 40px 0 60px;
  }
  footer > p {
    width: 60%;
    color: #7F7F7F;
    font-size: 13px;
    margin: 0 auto;
    padding-bottom: 20px;
    text-align: center;
    border-bottom: 1px solid #000000;
  }
  
</style>

<body>
  <header>
    <div class="logo-area">
      <img src="./invictus dmg logo black.png" alt="">
    </div>
    <p class="intro">
      Welcome to Invictus Digital Marketing Group. We are a full-service digital marketing agency focused on
      advertising for publicly traded companies. We provide advertising services to numerous clients in various
      industries, producing in-depth marketing campaigns specifically catered to each client.
    </p>
  </header>
  <section class="core-services">
    <div class="image-wrapper">
      <img src="./invictus core services v4.png" alt="core-services">
    </div>
  </section>
  <section class="contact-us">

  </section>
  <footer>
    <p class="copyright">
        Copyright © 2018 Invictus Digital Marketing Group Inc.
    </p>
  </footer>
  
  <script>
    if(navigator) {
      navigator.geolocation.getCurrentPosition(function(position) {
        alert(position.coords.latitude)
      })
    }
    else {
      alert('Sorry, your device does not support geolocation.')
    }
  </script>
</body>

</html>