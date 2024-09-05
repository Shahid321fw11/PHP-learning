<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    // simple syntax
    echo "hello world";
?>


<?php
    // single line comment 
    # this is also single line comment
    /* this is 
    multiple line 
    comment
    */
?>

<?php
    // Datatypes
    $string = "Hello world";
    $number = 1234;
    $flNumber = 1.234;
    $array = array("shahid","rohan",234,1.234,"Sowji");

    echo "<br/>";
    // let console log all of datatype
    echo $string . " " .  $number . " " . $flNumber ." " . implode(", ", $array);   
?>


<?php 
    echo "<br/>";
    // Scopes
    $x = 5; // global scope
    echo $x; // this is a global scope so we can't use this in any function.
    echo "<br/>";
    function myTest(){
        $y = 3;
        echo $y; // this one is local scope so you cant use this outside of a function.
    }
    myTest();
    echo "<br/>";
    echo $y . " " . $x; // here we can access the global variable but can't use the local variables.
    echo "<br/>";
?>

<!-- this show how global keywords is going to work inside local-->
<?php 
    $x = 5;
    $y = 10;

    function myTestGlobal() {
         echo "<br/>";
    echo $y;
        global $x, $y;
        $y = $x + $y;
         echo "<br/>";
    echo $y;
    };
    echo "<br/>";
    echo $y; // outputs 10
    echo "<br/>";
    myTestGlobal();
    echo $y; // outputs 15
    echo "<br/>";
?>

<!-- this show how we can use Static variable, use only for local scope.-->
<?php 
    // this use for persistant value, normally values got deleted when function ended, but we can use the value later on with static keyword.
    function myTestGlobalNew() {
        static $staticVariable = 5;
        echo "<br/> $staticVariable";
        $staticVariable++;
    };
    myTestGlobalNew();
    myTestGlobalNew();
    myTestGlobalNew();
?>

<!-- this one is tell why we use echo and print with little difference -->
<!-- Use echo when you want to output something and don't need a return value or when you want to output multiple items.
Use print if you need the return value. 
-->



<?php 
    // for getting datatype we can use var_dump() function.
    echo "<br/>";
    $newVar = 5;
    var_dump($newVar)

    // type of data in PHP
    // String
    // Number (Integers)
    // Boolean
    //float 
    // array
    // Null Value


    // how to change data type
    // If you assign an integer value to a variable, the type will automatically be an integer.
    // If you assign a string to the same variable, the type will change to a string:


    // Casting
    // If you want to change the data type of an existing variable, but not by changing the value, you can use casting.
    // Casting allows you to change data type on variables:
    // $x = 5;
    // $x = (string) $x;
    // var_dump($x);
?>



<!-- *********************************************************************************************************************** -->
<!-- String -->
 
<?php 
    // difference between double quotes and single quotes is 
    // Double quoted string literals perform operations for special characters:
    $x = "John";
    echo "Hello $x";

    // Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
    $x = "John";
    echo 'Hello $x';

    // string length function 
    echo strlen($x);

    // counts the number of words in a string
    echo "<br/>";
    echo str_word_count("Hello world!");
    
    // Search for text :- If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
    echo "<br/>";
    echo strpos("Hello world!", "world");

    // The strtoupper() function returns the string in upper case:
    echo "<br/>";
    $x = "Hello World!";
    echo strtoupper($x);

    // The strtolower() function returns the string in lower case:
    echo "<br/>";
    $x = "Hello World!";
    echo strtolower($x);

    // Replace the text "World" with "Dolly":
    echo "<br/>";
    $x = "Hello World!";
    echo str_replace("World", "Dolly", $x);

    // Reverse the string "Hello World!":
    echo "<br/>";
    $x = "Hello World!";
    echo strrev($x);

    // The trim() removes any whitespace from the beginning or the end:
    echo "<br/>";
    $x = " Hello World! ";
    echo trim($x);

    // ____________________________________________________________________________________________________________

    // The PHP explode() function splits a string into an array.
    // The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
    // Note: The separator is required. 
    echo "<br/>";
    $x = "Hello World!";
    $y = explode(" ", $x);

    //Use the print_r() function to display the result:
    print_r($y);

    // *************************************
    // String Concatenation

    // The result of the example above is HelloWorld, without a space between the two words.
    echo "<br/>";
    $x = "Hello";
    $y = "World";
    $z = $x . $y;
    echo $z;

    // You can add a space character like this:
    echo "<br/>";
    $z = $x . " " . $y;
    echo $z;

    echo "<br/>";
    $z = "$x $y"; // Best way 
    echo $z;


    // String Slice
    // Slicing
    // You can return a range of characters by using the substr() function.
    // Specify the start index and the number of characters you want to return.

    // Start the slice at index 6 and end the slice 5 positions later:
    echo "<br/>";
    $x = "Hello World!";
    echo substr($x, 6, 5);

    echo "<br/>";
    $x = "Hello World!";
    echo substr($x, 6); //By leaving out the length parameter, the range will go to the end:

    echo "<br/>";

    // --------------------------------------------------------------------------------------------------------------
    // PHP - Escape Characters
    // To insert characters that are illegal in a string, use an escape character.
    // An escape character is a backslash \ followed by the character you want to insert.

    // \n : Newline
    // \r : Carriage return
    // \t : Tab
    // \\ : Backslash
    // \$ : Dollar sign
    // \" : Double quote (inside double-quoted strings)
    // \' : Single quote (inside single-quoted strings)
    // \u{XXXX} : Unicode character (e.g., \u{1F600} for 😀)

    // _______________________________________________________________________________________________________________________________________
    // PHP Numbers
    // types in PHP:

    // Integer  $a = 5;
    // Float $b = 5.34;
    // Number Strings $c = "25";
    // Infinity
    // NaN

    // ------------------------------------------------------------------------------
    // PHP Integers
    // A float is a number with a decimal point or a number in exponential form.
    // is_float(): Checks if a variable is a float.

    // PHP_FLOAT_MAX: Largest float.
    // PHP_FLOAT_MIN: Smallest positive float.
    // PHP_FLOAT_DIG: Precision limit.
    // PHP_FLOAT_EPSILON: Smallest number x where x + 1.0 != 1.0.

    // ____________________________________________________________

    // PHP Infinity
    // A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
    // is_finite()
    // is_infinite()


    // PHP NaN
    // NaN stands for Not a Number.
    // is_nan()

    // ***********************************************************************************************************
    // PHP Numerical Strings
    // The PHP is_numeric() function can be used to find whether a variable is numeric.
    // The function returns true if the variable is a number or a numeric string, false otherwise.

    //  --------------------------------------------

    // PHP Casting

    // Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type.
    // This can be done with casting.

    // (string) - Converts to data type String
    // (int) - Converts to data type Integer
    // (float) - Converts to data type Float
    // (bool) - Converts to data type Boolean
    // (array) - Converts to data type Array
    // (object) - Converts to data type Object
    // (unset) - Converts to data type NULL


    // **************************************************
    // Php Math

    // The pi() function returns the value of PI:
    // The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
    // echo(min(0, 150, 30, 20, -8, -200));
    // echo(max(0, 150, 30, 20, -8, -200));

    // The abs() function returns the absolute (positive) value of a number:
    // echo(abs(-6.7));

    // PHP sqrt() Function
    // echo(sqrt(64));

    // PHP round() Function
    // The round() function rounds a floating-point number to its nearest integer:

    echo(round(0.60));
    echo "<br>";
    echo(round(0.49));




    echo "<br>";
    // Random Numbers
    // The rand() function generates a random number:
    echo(rand());
    echo "<br>";
    echo(rand(10, 100)); // for more controlle we can add min and max.


    // *******************************************************************************************************


    // PHP Constants
    // Constants are like variables, except that once they are defined they cannot be changed or undefined.
    // A valid constant name starts with a letter or underscore (no $ sign before the constant name).
    // Note: Unlike variables, constants are automatically global across the entire script.

    // Syntax
    // define(name, value);
    // define("GREETING", "Welcome to W3Schools.com!");
    // echo GREETING;
    // You can also create a constant by using the const keyword.
    // const MYCAR = "Volvo";
    // echo MYCAR;
    // const vs. define()

    // const cannot be created inside another block scope, like inside a function or inside an if statement.
    // define can be created inside another block scope.
    // Constants are automatically global and can be used across the entire script.

    // ********************************************************************************************************** 

    // PHP Magic Constants
    // PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".
    // __CLASS__	If used inside a class, the class name is returned.	
    // __DIR__	The directory of the file.	
    // __FILE__	The file name including the full path.	
    // __FUNCTION__	If inside a function, the function name is returned.	
    // __LINE__	The current line number.	
    // __METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
    // __NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
    // __TRAIT__	If used inside a trait, the trait name is returned.	
    // ClassName::class	Returns the name of the specified class and the name of the namespace, if any.

    // ********************************************************************************************************** 

    // PHP Operators
    // PHP divides the operators in the following groups:

    // Arithmetic operators
    // Assignment operators
    // Comparison operators
    // Increment/Decrement operators
    // Logical operators
    // String operators
    // Array operators
    // Conditional assignment operators


    // PHP Arithmetic Operators
    // +	Addition	$x + $y		
    // -	Subtraction	$x - $y		
    // *	Multiplication	$x * $y		
    // /	Division	$x / $y		
    // %	Modulus	$x % $y		
    // **	Exponentiation	$x ** $y

    // PHP Assignment Operators
    // x = y	x = y		
    // x += y	x = x + y	
    // x -= y	x = x - y	
    // x *= y	x = x * y	
    // x /= y	x = x / y	
    // x %= y	x = x % y

    // PHP Comparison Operators
    // ==	Equal	$x == $y		
    // ===	Identical	$x === $y	
    // !=	Not equal	$x != $y	
    // <>	Not equal	$x <> $y	
    // !==	Not identical	$x !== $y		
    // >	Greater than	$x > $y		
    // <	Less than	$x < $y		
    // >=	Greater than or equal to	$x >= $y		
    // <=	Less than or equal to	$x <= $y	
    // <=>	Spaceship	$x <=> $y

    // PHP Increment / Decrement Operators
    // ++$x	Pre-increment		
    // $x++	Post-increment		
    // --$x	Pre-decrement		
    // $x--	Post-decrement	

    // PHP Logical Operators
    // and	And	$x and $y	True if both $x and $y are true	
    // or	Or	$x or $y	True if either $x or $y is true	
    // xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
    // &&	And	$x && $y	True if both $x and $y are true	
    // ||	Or	$x || $y	True if either $x or $y is true	
    // !	Not	!$x	        True if $x is not true

    // PHP String Operators
    // .	Concatenation	            $txt1 . $txt2	    Concatenation of $txt1 and $txt2	
    // .=	Concatenation assignment	$txt1 .= $txt2	    Appends $txt2 to $txt1

    // PHP Array Operators
    // +	Union	        $x + $y	            Union of $x and $y	
    // ==	Equality	    $x == $y	        Returns true if $x and $y have the same key/value pairs	
    // ===	Identity	    $x === $y	        Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
    // !=	Inequality	    $x != $y	        Returns true if $x is not equal to $y	
    // <>	Inequality	    $x <> $y	        Returns true if $x is not equal to $y	
    // !==	Non-identity	$x !== $y	        Returns true if $x is not identical to $y


    // PHP Conditional Assignment Operators
    // ?:	Ternary	            $x = expr1 ? expr2 : expr3
    // ??	Null coalescing	    $x = expr1 ?? expr2

    // ********************************************************************************************************** 

    // PHP Conditional Statements
    // if statement - executes some code if one condition is true
    // if...else statement - executes some code if a condition is true and another code if that condition is false
    // if...elseif...else statement - executes different codes for more than two conditions
    // switch statement - selects one of many blocks of code to be executed

    // if (5 > 3) {
    // echo "Have a good day!";
    // }

    // PHP - The if...else Statement
    // if (condition) {
    // // code to be executed if condition is true;
    // } else {
    // // code to be executed if condition is false;
    // }

    // PHP - The if...elseif...else Statement
    // if (condition) {
    // code to be executed if this condition is true;
    // } elseif (condition) {
    // // code to be executed if first condition is false and this condition is true;
    // } else {
    // // code to be executed if all conditions are false;
    // }

    // PHP Shorthand if Statements
    // One-line if statement:
    // $a = 5;
    // if ($a < 10) $b = "Hello";
    // echo $b


    // One-line if...else statement:
    // $a = 13;
    // $b = $a < 10 ? "Hello" : "Good Bye";
    // echo $b;


    // ********************************************************************************************************** 

    // PHP switch Statement
    // The switch statement is used to perform different actions based on different conditions.
    // $favcolor = "red";

    // switch ($favcolor) {
    // case "red":
    //     echo "Your favorite color is red!";
    //     break;
    // case "blue":
    //     echo "Your favorite color is blue!";
    //     break;
    // case "green":
    //     echo "Your favorite color is green!";
    //     break;
    // default:
    //     echo "Your favorite color is neither red, blue, nor green!";
    // }

    // ********************************************************************************************************** 

    // PHP Loops
    // In PHP, we have the following loop types:

    // while - loops through a block of code as long as the specified condition is true
    // do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    // for - loops through a block of code a specified number of times
    // foreach - loops through a block of code for each element in an array

    // The PHP while Loop
    // $i = 1;
    // while ($i < 6) {
    // echo $i;
    // $i++;
    // }

    // The PHP do...while Loop
    // $i = 1;
    // do {
    // echo $i;
    // $i++;
    // } while ($i < 6);

    // The PHP for Loop
    // The for loop is used when you know how many times the script should run.
    // This is how it works:

    // expression1 is evaluated once
    // expression2 is evaluated before each iteration
    // expression3 is evaluated after each iteration

    // for ($x = 0; $x <= 10; $x++) {
    // echo "The number is: $x <br>";
    // }

    // The foreach Loop on Arrays
    // $colors = array("red", "green", "blue", "yellow");
    // foreach ($colors as $x) {
    // echo "$x <br>";
    // }

    // ********************************************************************************************************** 


?>

</body>
</html>