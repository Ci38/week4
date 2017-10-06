<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";
echo "<br>";

$date = str_replace('-', '/', $date);
echo "The value of \$date: ".$date."<br>";

$result = strcmp($date, $tar);
if ($result > 0){
 echo 'the future';
 } else if ($result < 0){
 echo 'the past';

} else if ($result == 0){
 echo 'Oops'; 
}
echo "<br>";

echo  strpos("$date", '/') . ' ' . strpos("$date", '/', 7);
echo "<br>";

echo "The no. of words in \$date are:" .  str_word_count("$date");
echo"<br>";

echo "The length of the string is:" . strlen("$date");
echo"<br>";

$val = ord("$date");
echo $val;
echo "<br>";

echo "The last two characters of \$date are:" .  substr("$date", -2);
echo"<br>";

$date =  explode('/', $date);
print_r($date);
echo \t  . ' ';


foreach ($year as $a)
{
for ($i=0; $i<1; $i++)
{
switch ($a)
{ 
case( ($a%4 == 0) and ($a%100!=0) or ($a%400)==0);
echo $a . 'True' . '<br>';
break;
default;
echo $a . 'False' . '<br>';
}
}
}


?>
