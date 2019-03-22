<?php

if (isset($_SESSION['uidUsers'])) {
  require 'config.inc.php';

  $messegeUid = $_SESSION['uidUsers'];
  $sql = "SELECT * FROM messages";
  $result = mysqli_query($conn, $sql);

  echo '';
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row["uid"] != $messegeUid) {
        echo '<div class="host-message">';
      } else {
        echo '<div class="message">';
      }
      echo '<h4>'. $row["uid"] .'</h4>'.'<p>'
     . $row["message"] .'</p>'.'</div>';
    }
  }
  echo '';
}
