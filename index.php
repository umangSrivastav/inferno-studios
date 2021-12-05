<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        include_once("home.html");
        break;
    case '' :
        include_once("home.html");
        break;
    case '/about' :
        include_once("about.html");
        break;
    default:
        http_response_code(404);
        include_once("home.html");
        break;
} ?>
