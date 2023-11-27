<?php
require_once 'CustomException.php';

function checkNumber($number){
    if ($number < 5){
        throw  new CustomException("Number is too low");
    }
}   return true;