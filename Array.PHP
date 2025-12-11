<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $A="1000$";
    $B="2000$";
    $C= "3000$";
    ?>
    <table border="1 solid black">
        <tr>
            <td>salary of Mr.A is </td>
            <td><?PHP echo $A;?></td>
        </tr>
        <tr>
            <td>salary of Mr.B is </td>
            <td><?php echo $B ?></td>
        </tr>
        <tr>
            <td>salary of Mr.C is </td>
            <td><?PHP echo $C ?> </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
</body>
</html>



<?php
echo "<br>";
$filename = 'indexX.php';
if (file_exists($filename)) {
    echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
    echo "<br>";
    echo "<br>";
    $lineCount=count(file($filename));
    var_dump("The file '$filename' has $lineCount lines.");
}
echo "<br>";
echo"<br>";
?>



<?php 
//Arrays 
$Colors=["red","green","white"];
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the "  .$Colors[0]. " carpet, the " .$Colors[1]. " lawn, the " .$Colors[2]. " house,
  the leaden sky. The new president and his first lady. - Richard M. Nixon";
  echo "<br>";
  echo "";  
    echo "<ul>";
    for ($i = 0; $i < count($Colors); $i++) {
        echo "<li>" . $Colors[$i] . "</li>";
    }
    echo "</ul>";
    ?>

    <?php
    $cities= array( 
    "Italy"=>"Rome", 
    "Luxembourg"=>"Luxembourg", 
    "Belgium"=> "Brussels", 
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", 
    "France" => "Paris", 
    "Slovakia"=>"Bratislava", 
    "Slovenia"=>"Ljubljana", 
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", 
    "Portugal"=>"Lisbon", 
    "Spain"=>"Madrid" );

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of " . $country . " is " . $capital . "<br>";
}
?>

<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
$firstelemnt=array_shift($color);
echo $firstelemnt;
echo "<br>";
?>

<?php 
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
?>

<?php
$array=[1,2,3,4,5];
array_splice($array,4,0,"$");
print_r($array);
echo"<br>";
?>

<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " = " . $value . "<br>";
}
echo "<br>";
?>

<?php
$array=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
sort($array);
$avg = array_sum($array) / count($array);
echo "Average Temperature is: ".$avg."<br>";
$lowest=array_slice($array,0,5);
$highest=array_slice($array,-5);
foreach($lowest as $value){
    echo "The Lowest:" .$value . ", ";

}
echo "<br>";
foreach($highest as $value){
    echo "The Highest:".$value . ", ";
}
echo "<br>";
echo "<br>";
?>

<?php
echo"<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$merge_array=array_merge($array1, $array2);
print_r($merge_array);
echo"<br>";
echo"<br>";
?>

<?php
$colors = array("red","blue", "white","yellow");
$upper = array_map('strtoupper', $colors);
print_r($upper);
echo"<br>";
echo"<br>";
?>

<?php
echo"<br>";

function changeStringsToUpperCase($colors)
{
    foreach ($colors as $key => $value) {
        if (is_string($value)) {
            $colors[$key] = strtoupper($value);
        }
    }
    return $colors;
}
$colors = array("red","blue", "white","yellow");
$upperArray = changeStringsToUpperCase($colors);
print_r($upperArray);
echo "<br>";
?>

<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");
$colors = array_map( 'strtolower', $colors );
foreach( $colors as $element )
    echo $element . "\n";
echo "<br>";
?>

<?php
for($i=200; $i<=250;$i++){
    echo "";
    if($i%4==0){
        print_r($i);
        echo ",";
    }

}

?>

<?php

$words =  array("abcd","abc","de","hjjj","g","wer");
$shortest = strlen($words[0]);
$longest  = strlen($words[0]);
foreach($words as $word){
    $len = strlen($word);

    if($len < $shortest){
        $shortest = $len;
    }

    if($len > $longest){
        $longest = $len;
    }
}
echo "The shortest array length is $shortest. The longest array length is $longest.";

?>



<?php
$array1 = array(2, 0, 10, 12, 6);
sort($array1);
foreach($array1 as $num){
    if($num > 0){
        echo $num;
        break;
    }
}

?>

