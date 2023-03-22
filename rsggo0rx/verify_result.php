<?php

require 'header.php';

$redirect_url = 'index.php';

if ($_SESSION['result'] == true) {
  $redirect_url = 'connect.php';
}

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <title>
    <?php echo htmlspecialchars($business_name); ?> WiFi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link rel="stylesheet" href="assets/styles/bulma.min.css"/>
  <link rel="stylesheet" href="../vendor/fortawesome/font-awesome/css/all.css"/>
  <link rel="icon" type="image/png" href="assets/images/favicomatic/favicon.png"/>
  <link rel="stylesheet" href="assets/styles/style.css"/>

</head>

<body>

<div class="page">

  <div class="head">
    <br>
    <figure class="logo">
      <img src="assets/images/logo.png">
    </figure>
  </div>
  <br><br>
  <div class="main">
    <section class="section bg_col">
      <?php
      if ($_SESSION['result'] == true) {
        ?>
        <div id="margin_zero" class="content has-text-centered is-size-6">Great! Your code has been approved!</div>
        <div id="margin_zero" class="content has-text-centered is-size-6">You'll be automatically authorized</div>
        <div id="margin_zero" class="content has-text-centered is-size-6">in a few moments</div>
        <?php
      } else {
        ?>
        <div id="margin_zero" class="content has-text-centered is-size-6">Sorry! The code you entered</div>
        <div id="margin_zero" class="content has-text-centered is-size-6">is not correct. You'll shortly be</div>
        <div id="margin_zero" class="content has-text-centered is-size-6">redirected back to our main page</div>
        <?php
      }
      ?>
      </seection>
  </div>

</div>

</body>

</html>