<?php
ob_start();

require "../Developers/Password.php";

$url = new \Developers\Password();

//The user entered the password and the pass variable stores the value entered in the form.
$pass = '12345';

//The value of the hash variable would be coming from the database.
$hash = '$2y$10$qfGfQRGVb5/YMy6mZ.oSgeBrLyDoZTzQSMLaqyIA3tE/5O4YJarhG';

//Second: Verify Password
$result = $url -> VerifyPass($pass, $hash);

//Returns the value 1 if the verified password is true, otherwise only zero or empty, informing that the password entered is not the same.
echo $result;
ob_end_flush();
