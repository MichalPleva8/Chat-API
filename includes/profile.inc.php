<?php
  session_start();

  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  print_r($file);

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 500000000) {
        $fileDestination = '../profiles/' . $_SESSION['uidUsers'] . '.profile.' . $fileActualExt;


        move_uploaded_file($fileTmpName, $fileDestination);

        header("Location: ../index.php?upload=success");
      } else {
        header("Location: ../index.php?error=invalidsize");
        exit();
      }
    } else {
      header("Location: ../index.php?error=uploaderror");
      exit();
    }
  } else {
    header("Location: ../index.php?error=invalidtype");
    exit();
  }
