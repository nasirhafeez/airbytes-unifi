<?php

require 'header.php';
include 'config.php';

$_SESSION["id"] = $_GET['id'];
$_SESSION["ap"] = $_GET['ap'];
$_SESSION["user_type"] = "new";

# Checking DB to see if user exists or not.
$result = mysqli_query($con, "SELECT * FROM `$table_name` WHERE mac='$_SESSION[id]'");

if ($result->num_rows >= 1) {
  $row = mysqli_fetch_array($result);

  mysqli_close($con);

  $_SESSION["user_type"] = "repeat";
  header("Location: welcome.php");
} else {
  mysqli_close($con);
}

?>
<!doctype html>
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
        <figure id="logo">
            <img src="assets/images/logo.png">
        </figure>
    </div>

    <div class="main">
        <section class="section">
            <div class="container">
                <div id="login" class="content is-size-6 has-text-centered">Please enter your details</div>
                <br>
                <form method="post" action="verify.php">
                    <div class="field">
                        <div class="control has-icons-left">
                            <input class="input" type="text" id="form_font" name="fname" placeholder="First Name" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control has-icons-left">
                            <input class="input" type="text" id="form_font" name="lname" placeholder="Last Name" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control has-icons-left">
                            <input class="input" type="email" id="form_font" name="email" placeholder="Email" required>
                            <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                        </div>
                    </div>

                    <br>
                    <div class="columns is-centered is-mobile">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" required>
                                I agree to the <a href="policy.php">Terms of Use</a>
                            </label>
                        </div>
                    </div>
                    <div class="buttons is-centered">
                        <button class="button is-link">Connect</button>
                    </div>
                </form>
                <br>

            </div>
            <br>
        </section>
    </div>
</div>
</body>
</html>
