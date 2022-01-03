<?php
echo "<br><span style='color:red'>1-search for how to make \n work in browser</span><br>";
echo nl2br("aaaaaa\n bbbbbbb \r\n ccccccc");
echo "<br>******************<br>";

echo "<br><span style='color:red'>2-Discuss 3 built in function of string</span><br>";
echo "<br><span style='color:green'>a-addcslashes</span><br>";
echo addcslashes("Asmaa Mostafa","M");
echo "<br><span style='color:green'>b-str_shuffle</span><br>";
echo str_shuffle("Asmaa Mostafa");
echo "<br><span style='color:green'>c-str_split</span><br>";
print_r(str_split("Asmaa"));
echo "<br>******************<br>";

echo "<br><span style='color:red'>3-Display \$_SERVER in readable format</span><br>";
foreach($_SERVER  as $key => $value) {
   
     echo "{$key} => {$value} ";
     echo "<br>";
 }
echo "<br>******************<br>";

echo "<br><span style='color:red'>4-sum and avg and sort in indexed array</span><br>";
$numbers = array( 12, 45, 10, 25);
print_r ($numbers);
echo "<br><span style='color:green'>a-sum</span><br>";
echo array_sum($numbers);
echo "<br><span style='color:green'>b-avg</span><br>";
$average = array_sum($numbers)/count($numbers);
echo $average;
echo "<br><span style='color:green'>c-sort (highest to lowest)</span><br>";
arsort($numbers);
print_r ($numbers);
echo "<br>******************<br>";

echo "<br><span style='color:red'>5-associative array</span><br>";
$names = array("Sara" => 31, "John" => 41, "Walaa" => 39 ,"Ramy" =>"40");
print_r($names);
echo "<br><span style='color:green'>a-ascending order sort by value</span><br>";
asort($names);
print_r($names);
echo "<br><span style='color:green'>b-ascending order sort by Key</span><br>";
ksort($names);
print_r($names);
echo "<br><span style='color:green'>c-descending order sorting by Value</span><br>";
arsort($names);
print_r($names);
echo "<br><span style='color:green'>d- descending order sorting by Key</span><br>";
krsort($names);
print_r($names);
echo "<br>******************<br>";


?>