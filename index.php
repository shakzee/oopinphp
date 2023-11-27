<?php
require_once 'functions.php';

try {
    checkNumber(2);
    //echo 'Number is acceptable.';
}
catch (CustomException $e){
    echo "Custom error:".$e->getMessage();
} finally {
    echo "This is executed regardless of the exception.";
}
