<?php
echo "<h2>Project Information</h2>";
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";
$path = $_SERVER['SCRIPT_NAME'];
$projectName = explode('/', $path)[1];
echo "Project Name: " . $projectName;
?>
