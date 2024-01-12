An exception is an object that describes an error or
 unexpected behaviour of a PHP script.

<!-- try {
  code that can throw exceptions
} catch(Exception $e) {
  code that runs when an error
} -->
// The throw statement 
The throw statement allows a user defined function or
 method to throw an exception.
<?php

function divide($num1, $num2) {
    try {
        if ($num2 == 0) {
            throw new Exception("Cannot divide by zero.");
        }

        $result = $num1 / $num2;
        echo "Result: $result";
    } catch (Exception $e) {
        echo "Exception caught: " . $e->getMessage();
    } finally {
        echo "\nFinally block executed.";
    }
}


divide(10, 2); // Output: Result: 5
divide(5, 0);  // Output: Exception caught: Cannot divide by zero. Finally block executed.
