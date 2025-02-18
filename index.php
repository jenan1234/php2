<?php
// task1
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "This year is a leap year";
    } else {
        return "This year is not a leap year";
    }
}
// task2
function checkSeason($temp) {
    return $temp < 20 ? "It is winter!" : "It is summertime!";
}
// task3
function sumOrTriple($a, $b) {
    return ($a == $b) ? ($a + $b) * 3 : ($a + $b);
}
// task4
function checkSum($a, $b) {
    return ($a + $b == 30) ? ($a + $b) : "false";
}
// task5
function isMultipleOfThree($num) {
    return ($num % 3 == 0) ? "true" : "false";
}
// task6
function inRange($num) {
    return ($num >= 20 && $num <= 50) ? "true" : "false";
}
// task7
function findLargest($a, $b, $c) {
    return max($a, $b, $c);
}
// task8
function calculateBill($units) {
    $bill = 0;
    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }
    return $bill . " JOD";
}
// task9
function calculator($a, $b, $operation) {
    switch ($operation) {
        case 'add': return $a + $b;
        case 'subtract': return $a - $b;
        case 'multiply': return $a * $b;
        case 'divide': return ($b != 0) ? $a / $b : "Cannot divide by zero";
        default: return "Invalid operation";
    }
}
// task10
function canVote($age) {
    return ($age >= 18) ? "Eligible to vote" : "Not eligible to vote";
}
// task11
function checkNumber($num) {
    if ($num > 0) return "Positive";
    elseif ($num < 0) return "Negative";
    else return "Zero";
}
// task12
function findGrade($scores) {
    $average = array_sum($scores) / count($scores);
    if ($average < 60) return "F";
    elseif ($average < 70) return "D";
    elseif ($average < 80) return "C";
    elseif ($average < 90) return "B";
    else return "A";
}
