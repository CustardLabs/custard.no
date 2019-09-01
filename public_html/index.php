<?php 

include "../include/functions.php";

$uri = $_SERVER["REQUEST_URI"];
$parts = explode("/", $uri);

if (isset($parts[1]) && $parts[1]) {
  $page = $parts[1];
}
else {
 $page = "home";
}

// Basic routing
switch ($page) {
  case "home":
    $includePage = "home";
    break;
  case "about":
    $includePage = "about";
    break;
  case "projects":
    $includePage = "projects";
    break;
  case "jobs":
    $includePage = "jobs";
    break;
  default:
    die("404!");
    break;
}

include "../include/header.php";
include "../content/{$includePage}.php";
include "../include/footer.php";