<?php
//1.Write a PHP script to see if the specified year is a leap year or not.
$year = 2013;
if(($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)){
    echo "This year is a leap year";
}else{
    echo "This year is not a leap year";
}

echo "<br>";
//2.Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
$temperature=28;
if($temperature >= 20){
    echo "$temperature  It is summertime!";
    echo "<br>";
}
else{
    echo"$temperature   It is wintertime!";
}
echo "<br>";
$firstelement=2;
$secondelement=2;
if($firstelement==$secondelement){
    $result= ($firstelement * $secondelement)*3;
    echo $result;
}
else{
    $result=($firstelement + $secondelement);
    echo $result;
}
echo "<br>";
//4.Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
$firstelement=10;
$secondelement=10;
$sum=$firstelement + $secondelement;
if($sum == 30)
{
    echo $sum;
}
else {
    echo "False";
}
//5.Write in PHP script to check if the given positive number is a multiple of 3.
echo "<br>";

$number = 20;

if($number % 3 == 0){
    echo "true";
}else{
    echo "false";
}

echo "<br>";
//6.Write a PHP script to check if the integer value is in the range of [20-50] inclusive
$number= 30;
if($number >= 20 && $number <= 50)
{
    echo "true";
}
else{
    echo "false";
}

echo "<br>";
//7.Write PHP script to find the largest number between the three integers
$a = 1;
$b = 5;
$c = 9;
echo max($a, $b, $c);
echo "<br>";

//8.Write PHP script to calculate the monthly electricity bill according to these rules
$units = 280;  
$bill = 0;

if($units <= 50){
    
    $bill = $units * 2.50;

}elseif($units <= 150){
    
    $bill = 50 * 2.50 + 
            ($units - 50) * 5.00;

}elseif($units <= 250){
    
    $bill  = 50 * 2.50;
    $bill += 100 * 5.00;
    $bill += ($units - 150) * 6.20;

}else{

    $bill  = 50 * 2.50;
    $bill += 100 * 5.00;
    $bill += 100 * 6.20;
    $bill += ($units - 250) * 7.50;
}
echo "Your electricity bill is: " . $bill . " JOD";

echo "<br>";
//9.Write php script to make a calculator, the calculator should contain the four main operations 
$a = 10;
$b = 5;
echo "Addition = " . ($a + $b) . "<br>";
echo "Subtraction =" . ($a - $b) . "<br>";
echo "Multiplication = " . ($a * $b) . "<br>";
echo "Division =" . ($a / $b) . "<br>";

echo "<br>";
//10.Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
$voteage=15;
if($voteage <=18){
echo "is  eligible to vote";
}
else{
    echo "is no eligible to vote";
}

echo "<br>";
//11.Write php script  to check whether a number is positive, negative or zero
$number= -60;
if($number < 0){
    echo "Negative";
}
elseif($number > 0){
    echo "Positive";
}
else{
    echo "Zero";
}
echo "<br>";

//12 Write a PHP to find the grade for the student, after calculating the average of his score in all the subject
$scores = [60,86,95,63,55,74,79,62,50];
$average = array_sum($scores) / count($scores);
if($average < 60){
    $grade = 'F';
}elseif($average < 70){
    $grade = 'D';
}elseif($average < 80){
    $grade = 'C';
}elseif($average < 90){
    $grade = 'B';
}else{
    $grade = 'A';
}
echo $grade;
echo '<br>';




?>
