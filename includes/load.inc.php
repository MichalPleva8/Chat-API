<?php
session_start();

if (isset($_SESSION['uidUsers'])) {
  require 'config.inc.php';

  $messegeUid = $_SESSION['uidUsers'];
  $sql = "SELECT * FROM messages";
  $result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row["uid"] != $messegeUid) {
        echo '<div class="host-message">';
        if (file_exists('../profiles/' . $row['uid'] . '.profile.jpg')) {
          echo '<img src="'. './profiles/' . $row['uid'] . '.profile.jpg' . '" class="message-profile">';
        } else {
          echo '<img src="./img/default.png" class="message-profile">';
        }
      } else {
        echo '<div class="message">';
        echo '<img src="'. './profiles/' . $messegeUid . '.profile.jpg' . '" class="message-profile">';
      }
      echo '<h4>'. $row["uid"] .'</h4>'.'<p>'
     . $row["message"] .'</p>'.'</div>';
    }
  }
}
