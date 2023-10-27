<?php
// // 1- Check The Number Is Even or Odd

// function isEvenOrOdd($num)
// {
//     if ($num % 2 == 0) {
//         echo "num is even";
//     } else {
//         echo "num is odd";
//     }
// }

// isEvenOrOdd(1);




// 2- Fizz Buzz Game    

// function fizzBuzz($num)
// {
//     if ($num % 3 === 0 and $num % 5 === 0) echo ("FizzBuzz");
//     if ($num % 3 === 0 and !($num % 5 === 0)) echo ("Fizz");
//     if (!($num % 3 === 0) and $num % 5 === 0) echo ("Buzz");
// }
// fizzBuzz(45);



// 3- Reverse String for example welcome => emoclew

// function revString($str)
// {

//     echo strrev($str);
// }
// revString("omar ehab");




// 4- Compute Circle Area and Circumference

// function comAreaAndCircumference($rad){
//     $area = pi() * pow($rad,2);
//     $circumference = 2 * pi()* $rad;
//     echo $area;
//     echo "<br/>";
//     echo $circumference;
// }
// comAreaAndCircumference(9);



// 5- check two given numbers and return true if one of the number is
// 50 or if their sum is 50.

// function checkNumber($num1, $num2){
//     if ($num1 == 50 or $num2 == 50 or $num1 + $num2 == 50) {
//       return true;
//     }
//     return false;
// }
// echo checkNumber(1, 50);




// 6- check from two given integers, whether one is positive and
// another one is negative.

// function checkPositiveOrNegative($num1, $num2)
// {

//     if ($num1 > 0) {
//         echo 'num1 is positive' . "<br />";
//     } else {
//         echo 'num1 is negative';
//     }

//     if ($num2 > 0) {
//         echo 'num2 is positive';
//     } else {
//         echo 'num2 is negative';
//     }
// }
// checkPositiveOrNegative(1, 2);




// 7- check whether a given positive number is a multiple of 5 or a
// multiple of 8.
// function checkNumIsMulOf80($num)
// {

//     if ($num % 5 == 0 and $num % 8 == 0) {
//         echo 'num is a multiple to 5 and also a multiple to 8';
//     } else if ($num % 5 == 0) {
//         echo 'num is a multiple to 5 ';
//     } else if ($num % 8 == 0) {
//         echo 'num is a multiple to 8';
//     }
// }
// checkNumIsMulOf80(160);




// 8- find the largest of three given integers
// function findTheLargest($num1,    $num2,    $num3)
// {

//     if ($num2 > $num1) {
//         if ($num2 > $num3) {
//             echo "num2 is the largest";
//         } else {
//             echo "num3 is the largest";
//         }
//     } else if ($num3 > $num1) {
//         if ($num3 > $num2) {
//             echo "num3 is the largest";
//         } else {
//             echo "num2 is the largest";
//         }
//     } else {
//         echo "num1 is the largest";
//     }
// }
// findTheLargest(30, 6, 45);



// 9- Compute The sum of the numbers from 1 to 10
// function sumFrom1To10()
// {

//     $sum = 0;
//     for ($x = 1; $x <= 10; $x++) {
//         $sum += $x;
//     }
//     echo $sum;
// }
// sumFrom1To10();




// 10- display the pattern like right angle triangle using an asterisk.
// *
// **
// ***
// ****
// *****

// function printStars()
// {

//     for ($x = 0; $x <= 5; $x++) {
//         for ($i = 0; $i <= $x; $i++) {
//             echo "*";
//         }
//         echo "<br />";
//     }
// }
// printStars();




// 11- check whether a given number is positive or negative.
// function checkSign($num){

//     if ($num == 0) {
//         echo "num equals zero";
//     } else if ($num > 0) {
//         echo "num is positive";
//     } else {
//         echo "num is positive";
//     }

// }
// checkSign(5);


// 12- store elements in an array and print it.
// Test Data:
// Input 10 elements in the array:
// element - 0 : 1
// element - 1 : 1
// element - 2 : 2
// $array = [];
// array_push($array, 0);
// array_push($array, 1);
// array_push($array, 2);
// for ($i = 0; $i < count($array) ; $i++) {
//     echo " Element - $i is {$array[$i]} <br>";
// }




// 13- print the sum of two numbers
// function printSum($num1, $num2)
// {
//     echo ($num1 + $num2);
// }
// printSum(263, 9);




// 14- calculate the factorial of a given number
// Test Data :Input the number : 5
// Expected Output :
// The Factorial of 5 is: 120
// function factorial($num)
// {
//     // $sum = 1;
//     // for ($i = 1; $i <= $num; $i++) {
//     //     $sum *= $i;
//     // }
//     // echo $sum;

//     if ($num == 1) {
//         return 1;
//     }
//     return $num *  factorial($num - 1);
// }
// echo factorial(5);



// 15- Create Simple Calculator (+ , - , * , /)

function calc($num1, $num2, $op)
{
    switch ($op) {
        case '+':
            return $num1 + $num2;

        case '-':
            return $num1 - $num2;

        case '*':
            return $num1 * $num2;

        case '/':
            return $num1 / $num2;
        default:
            return 'bad operation';
    }
}
echo calc(65, 8, '+');
