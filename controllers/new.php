<?php

$message = NULL;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $message = $_POST['message'];
} else {
  if(isset($_GET['message'])) {
    $message = $_GET['message'];
  } elseif (substr($_SERVER['REQUEST_URI'], 0, 9) === "/message/") {
    $matches = [];
    preg_match('/\/message\/(.+)/', $_SERVER['REQUEST_URI'], $matches);
    $message = $matches[1];
  }
}

if(!empty($message)) {
  file_put_contents('data/messages.txt', $message, FILE_APPEND | LOCK_EX);
}
