<?php

if (isset($_SESSION['uidUsers'])) {
  require 'config.inc.php';

  $messegeUid = $_SESSION['uidUsers'];
  $sql = "SELECT * FROM messages";
  $result = mysqli_query($conn, $sql);

  echo $result;
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row["uid"] != $messegeUid) {
        echo '<div class="message-wrap"><div class="host-message"><h4>Admin</h4><p>Message</p></div></div>';
      } else {
        echo '<div class="message-wrap"><div class="message"><h4>Admin</h4><p>Message</p></div></div>';
      }
      echo '<h4>'. $row["uid"] .'</h4>'.'<p>'
     . $row["message"] .'</p>'.'</div></div>';
    }
  }

}

// echo '<div class="message-wrap"><div class="message"><h4>Admin</h4><p>Message</p></div></div>';
