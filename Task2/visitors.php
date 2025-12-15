<?php
$filename = "visitors.txt";
if (!file_exists($filename)) {
    file_put_contents($filename, 0);
}
if (!isset($_COOKIE['visitor'])) {
    $count = file_get_contents($filename);
    $count++;
    file_put_contents($filename, $count);
    setcookie("visitor", "visited", time() + 86400);
}
echo "Number of Visitors: " . file_get_contents($filename);
?>
