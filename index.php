<?php

echo "AHA" . "<br />";

$var = 90;

echo "Value of variable is : " . $var . "<br />";

$str = "This is a test string in this file. <br />";

echo $str . "<br />";

// substr(string,start,length);
$sub_str = substr($str, 1, 4); 

echo $sub_str . "<br />";
