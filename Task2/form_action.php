<?php
echo "<h2>Form Data Result</h2>";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Data sent using <strong>POST</strong><br><br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Password: " . $_POST['password'];
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Data sent using <strong>GET</strong><br><br>";
    echo "Email: " . $_GET['email'] . "<br>";
    echo "Password: " . $_GET['password'];
}
?>
