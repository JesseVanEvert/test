<?php
$letters = "AABBCCDDEEFFGGHHIIJJKKLLMMNNOOPPQQRRSSTTUUVVWWXXYYZZ1234567890";
$password = "";

for ($i = 0; $i < 8; $i++){
    $randomNumber = rand (0, strlen($letters)-1);
    $password .= $letters[$randomNumber];
}

echo "$password";