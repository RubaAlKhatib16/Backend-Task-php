<?php
//1. Write a simple PHP class which displays the following string.'MyClass class has initialized!'
class MyClass {
    public function __construct() {
        echo "MyClass class has initialized!";
    }
}
$obj = new MyClass();
echo "<br>";

//2. Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.
class Intro {
    public function greet($name) {
        echo "Hello All, I am " . $name;
    }
}
$obj2 = new Intro();
$obj2->greet("Ruba");
echo "<br>";

//3. Write a PHP class that calculates the factorial of an integer.
class FactorialCalculator {
    public function factorial($number) {
        if ($number < 0) {
            return "Undefined for negative numbers";
        }
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}
$obj3 = new FactorialCalculator();
echo "Factorial of 5 is: " . $obj3->factorial(5);
echo "<br>";

// 4 Write a PHP class that sorts an ordered integer array with the help of sort() function. Sample array : array(11, -2, 4, 35, 0, 8, -9) Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
class ArraySorter {
    public $arr;

    public function __construct($arr) {
        $this->arr = $arr;
    }

    public function sortArray() {
        sort($this->arr);
        return $this->arr;
    }
}

$obj = new ArraySorter(array(11, -2, 4, 35, 0, 8, -9));
print_r($obj->sortArray());


echo "<br>";
// 5. Calculate the difference between two dates using the PHP OOP approach. Sample Dates : 1981-11-03, 2013-09-04 Expected Result : Difference : 31 years, 10 months, 1 days .
class DateDifference {
    private $date1;
    private $date2;

    public function __construct($date1, $date2) {
        $this->date1 = new DateTime($date1);
        $this->date2 = new DateTime($date2);
    }

    public function getDifference() {
        $interval = $this->date1->diff($this->date2);
        return "Difference: " . $interval->y . " years, " . $interval->m . " months, " . $interval->d . " days.";
    }
}
$dateDiff = new DateDifference("2002-10-16", "2025-10-16");
echo $dateDiff->getDifference();
echo "<br>";


//6. Write a PHP script to convert a string to Date and DateTime. Sample Date : '12-08-2004' Expected Output : 2004-12-08 Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.
class StringToDateConverter {
    public function convertToDate($dateString) {
        $date = DateTime::createFromFormat('d-m-Y', $dateString);
        return $date->format('Y-m-d');
    }

    public function convertToDateTime($dateString) {
        $dateTime = DateTime::createFromFormat('d-m-Y H:i:s', $dateString . ' 00:00:00');
        return $dateTime->format('Y-m-d H:i:s');
    }
}
$converter = new StringToDateConverter();
echo "Converted Date: " . $converter->convertToDate('12-08-2004') . "<br>";
echo "Converted DateTime: " . $converter->convertToDateTime('12-08-2004') . "<br>";


?>