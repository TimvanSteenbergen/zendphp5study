<?php
echo "<pre>";
$myArray=  array(
    'b' => 'Banana',
    'a' => 'Australia',
    2 => NULL
);
//$myArray = array_merge($myArray, [10]);
//$retrievedValue = array_pop($myArray);
print_r($myArray);
echo isset($myArray[2])?'yes':'nso';
echo ($myArray['a']);
//echo $retrievedValue;
?>
