<?php

if (isset($_POST['login'])) {
  require 'config.inc.php';

  $uidUsername = $_POST['uid'];
  $uidPassword = $_POST['password'];

  if (empty($uidUsername) || empty($uidPassword)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE uid=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $uidUsername);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {
        $uidPasswordCheck = password_verify($uidPassword, $row['pwd']);
        if ($uidPasswordCheck == false) {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        } elseif ($uidPasswordCheck == true) {
          session_start();
          $_SESSION['idUsers'] = $row['id'];
          $_SESSION['uidUsers'] = $row['uid'];

          header("Location: ../index.php");
          exit();
        } else {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
      } else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }


} else {
  header("Location: ../index.php?error=notsubmited");
  exit();
}
