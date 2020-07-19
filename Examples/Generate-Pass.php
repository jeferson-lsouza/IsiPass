<?php
ob_start();

require "../Developers/Password.php";

$url = new \Developers\Password();

//Generates the password randomly, including uppercase, lowercase, numbers and symbols.
$result = $url -> GeneratePass();

//Print
echo $result;
ob_end_flush();
