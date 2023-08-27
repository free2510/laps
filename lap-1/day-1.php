<?php
//Write a program to calculate the sum of all even numbers between 1 and 100.

// for ($i=1 ; $i<=100;$i++){
//     static $sum = 0;
//     if ($i%2==0) {
//         $sum += $i;
//         echo $sum, '</br>';
//     }

// }


// ======================================================

// Write a PHP function that calculates the area of a circle given its radius. Use the value of π (pi) as 3.14159.

// const pi = 3.14159;
// function area_of_circle($radius)
// {
//     $area = pi * pow($radius, 2);
//     return $area;
// }

// $radius = 2;
// echo area_of_circle($radius);


// ======================================================


// • Write a script that swaps the values of two variables without using a temporary variable.


// $a = 5;
// $b = 10;

// $a = $a + $b;
// $b = $a - $b;
// $a = $a - $b;


// echo "a =", $a, '</br>';
// echo "b =", $b;


// ======================================================



// Create a PHP function that takes an array of numbers and calculates the sum, average, maximum, and minimum values of the
// array.
// $arr = [1, 5, 7, 9, 10, 55];

// function cont($arr)
// {
//     static $sum = 0;
//     static $max = 0;
//     static $min = NAN;

//     for ($i = 0; $i < count($arr); $i++) {
//         $sum += $arr[$i];

//         if ($arr[$i] > $max) {
//             $max = $arr[$i];
//         }
//         if ($arr[$i] < $min || is_nan($min)) {
//             $min = $arr[$i];
//         }
//     }

//     $conta = [$sum, $max, $min];
//     return $conta;
// }

// $res = cont($arr);
// echo implode(", ", $res);


// ====================================================

// • Create a function that generates a multiplication table for a given number up to a specified limit (e.g., 5 x 1 = 5, 5 x 2 = 10, ...).

// function GMT($number, $limit)
// {
//     echo "Multiplication Table for {$number}:</br>";
//     for ($i = 1; $i <= $limit; $i++) {
//         $result = $number * $i;
//         echo "{$number} x {$i} = {$result}</br>";
//     }
// }

// $number = 5;
// $limit = 10;
// GMT($number, $limit);

// ====================================================
// • Write a PHP script that removes duplicates from an array while preserving the order of elements.
// $arr = [1, 1, 5, 6, 8, 9, 7, 7, 8, 9, 9];

// function removes_duplicates(&$arr)
// {
//     static $res = [];

//     for ($i = 0; $i < count($arr) - 1; $i++) {
//         if ($arr[$i] !== $arr[$i + 1]) {
//             array_push($res, $arr[$i]);
//         }
//     }

//     array_push($res, $arr[count($arr) - 1]); 

//     return $res;
// }

// echo implode(',', removes_duplicates($arr));

// ====================================================
// • Develop a PHP program that finds the second-largest element in an array of integers without sorting the array.


// $arr = [1, 5, 6, 7, 2, 99,9];
// function element(&$arr)
// {
//     static $max = 0;
//     static $second_largest = 0;
//     for ($i = 0; $i < count($arr); $i++)
//     {

//         if ($arr[$i] > $max)
//         {
//             $max = $arr[$i];
//         }
//     }
//     for ($i = 0; $i < count($arr); $i++)
//     {
//         if ($max > $arr[$i] && $second_largest < $arr[$i])
//         {
//             $second_largest = $arr[$i];
//         }
//     }
//     return $second_largest;
// }
// echo element($arr);
