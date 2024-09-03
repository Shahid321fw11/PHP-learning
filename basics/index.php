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

    $x = "Hello World!";
    echo substr($x, 6); //By leaving out the length parameter, the range will go to the end:

?>

</body>
</html>