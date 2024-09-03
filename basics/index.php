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


















?>

</body>
</html>