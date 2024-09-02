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
    $x = 5;
    $x = (string) $x;
    var_dump($x);
?>



</body>
</html>