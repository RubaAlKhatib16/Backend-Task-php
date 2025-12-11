<?php
//a.	Convert the entered string to uppercase.
echo strtoupper("Ruba alkhatib");
echo "\n";
echo "<br>";
//b.	Convert the entered string to lowercase.
echo strtolower("RUBA ALKHATIB");
echo "\n";
echo "<br>";
//c.	Make the first letter of the string uppercase.
echo ucfirst("ruba alkhatib");
echo "\n";
echo "<br>";
//d.	Make the first letter of each word capitalized.
echo ucwords("ruba alkhatib");
echo  "\n";
echo "<br>";
?>

<?php
//2.	Write a PHP script splitting the following numeric string to be a date format. 
$time = "085119";

$hour   = substr($time,0,2);
$minute = substr($time,2,2);
$second = substr($time,4,2);
echo "$hour:$minute:$second";
echo "<br>";
?>
<?php
//3.	Write a PHP script to check whether the sentence contains a specific word.

$sentense="I am a full stack developer at orange coding academy";
$word="orange";
if(strpos($sentense,$word)!==false){
           echo "Word  is found";
}
else{
    echo "Word not found";
}
echo "<br>";
?>
<?php
//4.	Write a PHP script to extract the file name from the URL. 
$url = "www.orange.com/index.php";
$filename = basename($url);
echo $filename;
echo "<br>"; 
?>
<?php
//5.Write a PHP script to extract the username from the following email address. 
//6.Write a PHP script to get the last three characters from the string. 
$email = "info@orange.com";
$username = strstr($email, '@', true);
echo $username;   
echo '<br>';
$lastThree = substr($email, -3);
echo $lastThree;
echo "<br>";
?>
<?php
//7.Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 
$chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
$password = str_shuffle($chars);
echo $password;
echo "<br>";
?>
<?php
$str1 = "dragonball";
$str2 = "dragonboll";
$len = min(strlen($str1), strlen($str2));
for($i = 0; $i < $len; $i++){
    if($str1[$i] != $str2[$i]){
        echo "First difference between two strings at position $i: \"".$str1[$i]."\" vs \"".$str2[$i]."\"";
        break;
    }
}
echo "<br>";
?>
<?php
//10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 
$str = "Twinkle, twinkle, little star.";
$arr = explode(",", $str);
var_dump($arr);
echo "<br>";
?>


<?php
//11.	Write a PHP script to print the next letter of the inputted letter. 
$ch = 'c';
if($ch == 'z'){
   $next = 'a';
}else{
   $next = ++$ch;
}
echo $next;

echo '<br>';
?>


<?php
$original = "The brown fox";
$insert = "quick";
$words = explode(" ", $original);
array_splice($words, 1, 0, $insert);
$result = implode(" ", $words);
echo $result;
$str = "The quick brown fox";
$word = explode(" ", $str);
echo $word[0];

echo "<br>";
?>
<?php
//13.	Write a PHP script to remove zeroes from the given number. 
$str="0000657022.24";
$word = ltrim( $str, "0 ");
echo $word;
echo "<br>";
echo "<br>";
?>

<?php
//14.	Write a PHP script to remove part of a string. 
$str="The quick brown fox jumps over the lazy dog";
echo (str_replace("fox","", $str));
echo "<br>";
?>
<?php
$str="The quick brown fox jumps over the lazy dog---";
$word=rtrim($str,"-");
echo $word;
echo "<br>";

//16.	Write a PHP script to remove Special characters from the following string. 
$str = '\"\1+2/3*2:2-3/4*3';
$result = preg_replace("/\D+/", "", $str);
echo $result;
echo "<br>";
?>

<?php
//17.	Write a PHP script to select first 5 words from the following string. 
$str = "The quick brown fox jumps over the lazy dog";
$words = explode(" ", $str);
$firstFive = array_slice($words, 0, 5);
echo implode(" ", $firstFive);
echo "<br>";
?>
<?php
//18.	Write a PHP script to remove comma(s) from the following numeric string.
$num = "2,543.12";
$result = str_replace(",", "", $num);
echo $result;
echo "<br>";
?>
<?php
// 19.	Write a PHP script to print letters from 'a' to 'z'. 
foreach(range('a','z') as $char){
    echo $char . " ";
}
echo "<br>";
?>


