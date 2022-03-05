<?php

require 'Validator.php';

$val = new Validator();

var_dump($val->validateEmail('john@example.com'));
var_dump($val->validateEmail('johnexample.com'));

echo '<hr>';

var_dump($val->validatePhoneNumber('+77082283520'));
var_dump($val->validatePhoneNumber('+1128998576'));
var_dump($val->validatePhoneNumber('+7128998576'));
echo '<hr>';


var_dump($val->validatePassword('Aa88s8'));

echo '<hr>';

var_dump($val->validateDate('22.02.2022'));

	