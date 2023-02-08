<?php
$pass_length = $_GET['password'];
function generatePassword($pass_length)
{
    $pass = '';
    $parts = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
    for ($i = 0; strlen($pass) <= $pass_length - 1; $i++) {
        $pass .= $parts[array_rand($parts)];
    }

    return $pass;
}
$pass = '';
