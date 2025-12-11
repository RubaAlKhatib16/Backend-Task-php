<?php
//1.Write a PHP script to check if the inserted number is a prime number 
function isPrime($num) {
    if ($num <= 1) {
        echo "$num is NOT prime <br>";
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            echo "$num is NOT prime <br>";
            return false;
        }
    }

    echo "$num is Prime<br>";
    return true;
}
isPrime(7);
isPrime(12);

//2.Write a PHP script to reverse a string 
function reverseString($str) {
    return strrev($str);
}
echo reverseString("Orange"); 
echo "<br>";
echo "<br>";
//3.Write a PHP script to check if the all string characters are lower cases
function lowercasesstring($str){
    if(ctype_lower($str)){
        echo "your String is OK";
    }
    else{
        echo "your String is Not OK";
    }

}
lowercasesstring("remove");
echo "<br>";
echo "<br>";


//4.Write a PHP function to swap to variables?
 
function swapvar($x , $y){
    echo "x= $x y=$y";
    $temp=$x;
    $x=$y;
    $y=$temp;

    echo "X=$x Y=$y";

}
swapvar(10,12);
echo "<br>";
echo "<br>";

//6.	Write a PHP function to check if a number is an Armstrong number or not ?
function Armstrong($num){
    $sum=0;
    $number=$num;
    while($number>0){
        $digit=$number %10;
        $sum +=$digit **3;
        $number = intdiv($number,10);
    }
    if($sum==$number){
        echo "$num is Armstrong Number";
    }
    else{
        echo "$num is Not Armstrong Number";
    }


}
Armstrong(153);
 
echo "<br>";
echo "<br>";
//7.Write a PHP function that checks whether a passed string is a palindrome or not?
function palindrome($str){
    $str = strtolower($str);

    $clean = preg_replace("/[^a-z0-9]/", "", $str);

    $rev = strrev($clean);
    
    if($clean == $rev){
        echo "Yes it is a palindrome";
    } else {
        echo "No it is not a palindrome";
    }
}

palindrome("Eva, can I see bees in a cave?");

echo "<br>";
echo "<br>";
//8.Write a PHP function to remove duplicates from an array ?
function removeduplicates(){
    $array=[2,4,7,8,4];
    $removearray=array_unique($array);
    print_r($removearray);
}
removeduplicates();










