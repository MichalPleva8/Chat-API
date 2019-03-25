<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="icon" href="img/icon.png">
    <!-- <link rel="stylesheet" href="css/style.css" media="all" type="text/css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136874114-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-136874114-1');
    </script>

    <!-- jquery -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <style media="screen">

    <?php
    $primaryColor = "#005EFF";
    $secondaryColor = "#0020B2";
     ?>

    * {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      box-sizing: border-box;
    }

    a {
      text-decoration: none;
    }

    body {
      width: 100%;
      height: 100%;
      background: #eee;
      font-family: sans-serif;
    }

    nav {
      width: 20%;
      background: #fff;
      border-right: 1px solid #ddd;
      height: 100vh;
      padding: 10px 0px;
      float: left;
      position: fixed;
      left: 0;
      top: 0;
    }

    nav .nav-logo {
      width: 90%;
      height: auto;
      margin: 30px auto;
      font-weight: bold;
      font-size: 1.8rem;
      text-align: center;
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    nav a .nav-logo {
      text-decoration: none;
    }

    nav form input {
      border: 1px solid #eee;
      padding: 5px 10px;
      width: 90%;
      margin: 5px 5%;
    }

    nav form button {
      border: 1px solid #eee;
      padding: 5px 10px;
      width: 90%;
      margin: 5px 5%;
    }

    .logout-btn {
      padding: 10px 15px;
      width: 90%;
      margin: 10px 5% 20px;
      background: #000;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      border-radius: 5px;
    }

    .default-btn {
      padding: 10px 15px;
      width: 90%;
      margin: 5px 5%;
      background: #eee;
      color: #000;
      font-weight: bold;
      cursor: pointer;
      border-radius: 5px;
    }

    nav .login-wrap a {
      color: #000;
      text-decoration: none;
      text-align: center;
      width: 100%;
      display: inline-block;
      margin: 5px auto;
    }

    nav button {
      border: 1px solid #eee;
      padding: 5px 10px;
      width: 90%;
      margin: 5px 5%;
    }

    .nav-fast-menu {
      width: 100%;
      height: auto;
      text-align: center;
    }

    p.nav-footer {
      width: 100%;
      height: auto;
      text-align: center;
      font-weight: bold;
      position: absolute;
      bottom: 10px;
    }


    main {
      float: left;
      width: 80%;
      height: 100vh;
      position: fixed;
      right: 0;
      top: 0;
    }

    .signup-wrap {
      width: 50%;
      margin: 5% auto;
      height: auto;
      padding: 5px;
      background: #fff;
    }

    .signup-wrap h3 {
      text-align: center;
      font-size: 1.4rem;
      margin: 25px 0px;
    }

    .signup-wrap form {
      width: 100%;
      height: 100%;
      margin: 0 auto;
      text-align: center;
    }

    .signup-wrap form input {
      width: 80%;
      padding: 10px 10px;
      margin: 10px;
      border-bottom: 1px solid #ddd;
    }

    .signup-wrap form input:focus {
      border-bottom: 2px solid #ddd;
    }

    .signup-wrap form button {
      width: 80%;
      padding: 10px 10px;
      margin: 30px 0px;
    }

    p.error-display {
      color: red;
      font-weight: bold;
      width: 100%;
      text-align: center;
      margin: 20px 0px;
    }

    .chatbox-wrap {
      position: fixed;
      bottom: 0;
      width: 80%;
      height: auto;
      /* overflow: hidden; */
      border: 1px solid #ddd;
    }

    .chatbox-wrap input {
      width: 90%;
      height: 100%;
      float: left;
      padding: 15px;
    }

    .chatbox-wrap button {
      width: 5%;
      height: 100%;
      background: <?php echo $primaryColor; ?>;
      color: #fff;
      float: left;
      padding: 15px;
    }

    .chatbox-wrap button:nth-child(2) {
      background: #333;
    }

    .message-wrap {
      width: auto;
      height: 100%;
      padding: 15px 15px 55px 15px;
      background: none;
      overflow-y: scroll;
    }

    .message {
      width: 100%;
      height: auto;
      padding: 10px;
      background: <?php echo $primaryColor ?>;
      color: #fff;
      margin-bottom: 10px;
      border-radius: 10px;
    }

    .host-message {
      width: 100%;
      height: auto;
      padding: 10px;
      background: #aaa;
      color: #fff;
      margin-bottom: 10px;
      border-radius: 10px;
    }

    .message h4 {
      margin: 5px 0px;
    }

    .message p {
      margin: 5px 0px;
    }

    .welcome-text {
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 1.5rem;
      text-align: center;
    }

    .nav-username {
      width: 100%;
      height: auto;
      text-align: center;
      font-weight: bold;
      font-size: 1.2rem;
      margin: 5px 0px;
    }

    .navigation-color {
      width: 90%;
      height: auto;
      margin: 15px auto;
    }

    .navigation-color ul {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: space-evenly;
    }

    .navigation-color ul li {
      list-style-type: none;
      border: 5px solid #000;
      color: #fff;
      padding: 1px;
      border-radius: 100%;
      display: inline-block;
      width: 35px;
      height: 35px;
      line-height: 30px;
      text-align: center;
    }

    .navigation-color ul li:nth-child(1) {
      background: red;
    }

    .navigation-color ul li:nth-child(2) {
      background: green;
    }
    .navigation-color ul li:nth-child(3) {
      background: blue;
    }
    .navigation-color ul li:nth-child(4) {
      background: orange;
    }
    .navigation-color ul li:nth-child(5) {
      background: purple;
    }


    /* Settings  */
    #settings-btn {
      padding: 10px 15px;
      width: 90%;
      margin: 5px 5% 0px 5%;
      background: #eee;
      color: #000;
      font-weight: bold;
      cursor: pointer;
      border-radius: 5px;
    }

    .nav-settings {
      width: 90%;
      height: auto;
      margin: 0px 0px 10px 0px;
    }

    .nav-settings button {
      width: 100%;
      height: auto;
      color: #000;
      font-weight: bold;
      margin: 0 5%;
      cursor: pointer;
      border: none;
    }

    .nav-settings button:hover {
      background: #ccc;
    }


    /* Media querys */
    @media only screen and (max-width: 720px) {
      main {
        width: 100%;
        height: 100%;
      }

      nav {
        height: 100%;
        width: 100%;
      }
    }



    /* Scroll bar */
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
      background: #888;
    }


    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
    </style>
    <title>Chat API</title>
  </head>
  <body>
    <nav>
      <a href="index.php"><div class="nav-logo"><p>Chat-API</p></div></a>
      <div class="login-wrap">
      <?php
        if (isset($_SESSION['uidUsers'])) {
          echo '<p class="nav-username">'. $_SESSION['uidUsers'] .'</p><form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout" class="logout-btn">Loqout</button>
          </form>
          <button id="settings-btn">Settings</button>
          <div class="nav-settings">
            <button type="button" name="dark-mode">Dark Mode 💡</button>
            <button type="button" name="dark-mode">Message scale 📺</button>
          </div>
          <button class="default-btn">Report Bug</button>
          <div class="nav-fast-menu">
            <button type="button" name="autoRefresh" class="default-btn">Auto Refresh</button>
          </div>';
        } else {
          echo '
            <form action="includes/login.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username">
              <input type="password" name="password" placeholder="Password">
              <button type="submit" name="login" class="default-btn">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
        }
      ?>
      </div>
      <!-- <div class="navigation-color">
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div> -->
      <p class="nav-footer">Coded with ❤️ by Michal Pleva</p>
    </nav>
