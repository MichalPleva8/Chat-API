<?php

if (isset($_POST['send-text'])) {
  session_start();
  require 'config.inc.php';

  $mojemeno = 123;
  $messegeText = $_POST['chatbox'];
  $messegeUid = $_SESSION['uidUsers'];

  if (empty($messegeText) || empty($messegeUid)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  } else {
    $sql = "SELECT * FROM messages";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    } else {
      $stmt->prepare("INSERT INTO messages (uid, message) VALUES (?, ?)");
      $stmt->bind_param("ss", $messegeUid, $messegeText);
      $stmt->execute();
      header("Location: ../index.php?message=sended");
    }
  }
} else {
  header("Location: ../index.php?error=notsubmit");
  exit();
}
