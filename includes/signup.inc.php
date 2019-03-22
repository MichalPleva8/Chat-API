<?php
if (isset($_POST['submit'])) {
  require './config.inc.php';

  $uidUsername = $_POST['uid'];
  $uidPassword = $_POST['pwd'];
  $uidPasswordRepeat = $_POST['pwdRepeat'];

  if (empty($uidUsername) || empty($uidPassword) || empty($uidPasswordRepeat)) {
    header("Location: ../signup.php?error=emptyfields");
    exit();
  } else {
    if ($uidPassword !== $uidPasswordRepeat) {
      header("Location: ../signup.php?error=pwdnotmatch&uid=$uidUsername");
      exit();
    } else {
      if (strlen($uidPassword) < 5) {
        header("Location: ../signup.php?error=smallpwd&uid=$uidUsername");
        exit();
      } else {
        $sql = "SELECT * FROM users WHERE uid=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?error=sqlerror");
          exit();
        } else {
          $hashedPassword = password_hash($uidPassword, PASSWORD_DEFAULT);

          $stmt = $conn->prepare("INSERT INTO users (uid, pwd) VALUES (?, ?)");
          $stmt->bind_param('ss', $uidUsername, $hashedPassword);
          $stmt->execute();
          header("Location: ../index.php?signup=sucess");
        }
      }
    }
  }
  $stmt->close();
  $conn->close();
} else {
  header("Location: ../signup.php?error=notsubmited");
  exit();
}
