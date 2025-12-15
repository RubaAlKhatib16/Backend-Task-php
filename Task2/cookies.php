<?php
$cookie_name  = "user";
$cookie_value = "test";
$expiry_time  = time() + 3600;
$cookie_path  = "/";
$domain       = "";
$secure       = false;
$httponly     = true;

setcookie(
    $cookie_name,
    $cookie_value,
    $expiry_time,
    $cookie_path,
    $domain,
    $secure,
    $httponly
);

foreach ($_COOKIE as $name => $value) {
    echo $name . " : " . $value . "<br>";
}


setcookie($cookie_name, "", time() - 3600, $cookie_path);
?>
