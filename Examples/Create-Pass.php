<?php
ob_start();

require "../Developers/Password.php";
//My Password
$pass = '12345';
$url = new \Developers\Password();

//Call the method to create the password
$result = $url -> CreatePass($pass);

//Print
echo $result;
ob_end_flush();
