<?php
function alphabeticalOrder($str): string
{

 $chars = str_split($str);

 sort($chars);

 return implode('', $chars);
}


$inputStr = 'alphabetical';
$result = alphabeticalOrder($inputStr);
echo $result;