<?php
require "php_url.class.php";
$url = new php_url(true);

print_r($url -> check_url("localhost:8080"));