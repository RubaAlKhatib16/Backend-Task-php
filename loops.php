<?php
//1.Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 
for($i = 1; $i <= 10; $i++){
    if($i < 10){
        echo $i . "-";
    } else {
        echo $i;
    }
}
echo "<br>";
//2.Create a script using a for loop to add all the integers between 0 and 30 and display the total
$sum = 0;
for($i = 0; $i <= 30; $i++){
    $sum = $sum + $i;
}
echo $sum;


echo "<br>";
//3.Create a script to generate the following pattern, using the nested for loop. 
for ($i = 1; $i <= 5; $i++) {

    $letter = chr(64 + $i); // A, B, C, D, E

    for ($j = 1; $j <= 5; $j++) {
        if ($j <= (5 - $i)) {
            echo "A ";
        } else {
            echo "$letter ";
        }
    }

    echo "<br>";
}

echo "<br>";

//4.Create a script to generate the following pattern, using the nested for loop. 

for ($i = 1; $i <= 5; $i++) {

    $num = $i; // 1,2,3,4,5

    for ($j = 1; $j <= 5; $j++) {
        if ($j <= (5 - $i)) {
            echo "1 ";
        } else {
            echo "$num ";
        }
    }

    echo "<br>";
}

echo "<br>";

//5.Create a script to generate the following pattern, using the nested for loop. 

for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= 5; $j++){

        if($i == $j){
            echo $i . " ";
        } else {
            echo "0 ";
        }

    }
    echo "<br>";
}

echo "<br>";

//6.Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.
$num = 5;
$fact = 1;

for($i = 1; $i <= $num; $i++){
    $fact = $fact * $i;
}

echo $fact;

echo "<br>";

//7.Write a program to calculate and print the Fibonacci sequence using a for loop.Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 
$first = 0;
$second = 1;

echo $first . ", " . $second;

for($i = 2; $i < 10; $i++){
    $third = $first + $second;
    echo ", " . $third;
    $first = $second;
    $second = $third;
}
echo "<br>";

//8.Write a program which will count the "c" characters in the text "Orange Coding Academy". 
$text = "Orange Coding Academy";
$count = 0;

for($i = 0; $i < strlen($text); $i++){
    if(strtolower($text[$i]) == 'c'){
        $count++;
    }
}

echo $count;

echo'<br>'; 

//9.Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' cellpadding='3px' cellspacing='0px'>
        <?php
       for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo "<td>$i * $j = $result</td>";
    }
    echo "</tr>";
}
?>
    </table>
    <br>
    <br>
    <br>
</body>
</html>
<?php
//10.	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".

for ($i = 1; $i <= 50; $i++) {
    
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    }
    elseif ($i % 3 == 0) {
        echo "Fizz ";
    }
    elseif ($i % 5 == 0) {
        echo "Buzz ";
    }
    else {
        echo $i . "<br>";
    }
}
echo "<br>";
?>

<?php
echo "<br>";
//11.	Write a PHP program to generate and display the first n lines of a Floyd triangle
$n = 5;  
$num = 1; 

for ($i = 1; $i <= $n; $i++) {     
    for ($j = 1; $j <= $i; $j++) {  
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}
echo "<br>";
?>
<?php
//12.	Write a PHP program to print the following pattern. 

$letters = ["A", "B", "C", "D", "E"];  
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {

    echo str_repeat("&nbsp;&nbsp;", $rows - $i);
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }

    echo "<br>";
}

for ($i = $rows - 1; $i >= 1; $i--) {

    echo str_repeat("&nbsp;&nbsp;", $rows - $i);
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }

    echo "<br>";
}

?>






