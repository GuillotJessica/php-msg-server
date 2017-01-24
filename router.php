<?php
require __DIR__ . '/vendor/autoload.php';

if($_SERVER["REQUEST_METHOD"] === "GET" && $_SERVER["REQUEST_URI"] === "/wall") {
  include "views/wall.php";
} else {
  // User wants to post a new message
  include "controllers/new.php";
}
