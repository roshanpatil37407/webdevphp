<?php
// User-defined function to calculate the factorial of a number
function calculateFactorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Call the function
$number = 5; // Change this to the number for which you want to calculate the factorial
$factorial = calculateFactorial($number);

// Display the result
echo "The factorial of $number is: $factorial";
?>
