<?php

// $conn = mysqli_connect("mysql80.websupport.sk", "plevisDb", "echo032018MPcd", "plevisDb", 3314);

// $conn = mysqli_connect(null, "plevisDb", "echo032018MPcd", "plevisDb", null, "/tmp/mysql80.sock");

$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
  die("conn error:" . mysqli_connect_error());
}
