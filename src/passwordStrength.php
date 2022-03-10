<?php

$response = $_GET['password'];

$array = str_split($response);
$length = count($array);

$strength = 0;
$symbols = 0;
$numbers = 0;
$upperCaseCount = 0;
$lowerCaseCount = 0;



if ($length > 0) {
   

    for ($index = 0;$index < $length;$index += 1) {
        if (ctype_alpha($arrau[$index])) {
            $symbols += 1;
        }
        if (is_numeric($array[$index])) {
            $numbers += 1;
        }
        if (ctype_upper($array[$index])) {
            $upperCaseCount += 1;
        }
        if (ctype_lower($array[$index])) {
            $lowerCaseCount += 1;
        }
    }

    $lowerSum = (($length - $upperCaseCount) * 2);
    $upperSum = (($length - $lowerCaseCount) * 2);
    $strength += 4 * $length + 4 * $numbers + $lowerSum + $upperSum;

    if ($numbers === $length or $numbers === 0) {
        $strength -= $length;
    }

    $uniqueSymbols = $length - count(array_unique($array));
    $strength -= $uniqueSymbols;
}

echo 'Password strength is ' . $strength;

?>