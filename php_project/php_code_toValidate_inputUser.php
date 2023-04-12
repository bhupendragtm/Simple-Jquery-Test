<?php
if(isset($_POST[$id])){
    if(isset($_POST[$value])){

if (filter_var($int, FILTER_VALIDATE_INT) === 0 ||
!filter_var($int, FILTER_VALIDATE_INT) === false)
{
echo ("Number is an integer."); 
} else {
echo ("value is an string."); 
}
}}
// Output: Number is an integer.
?>