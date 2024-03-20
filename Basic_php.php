<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
    define('PI',3.14);
    echo"hello world and this is printed using php";
    // variables
    $variable1 = 37;
    $variable2 = 47;
    echo $variable1;
    echo $variable2;
    echo "<br>";
    //operators in PHP:-

    //1. Arithmatic operator
    echo "arithmatic sum of the variable1 and variable 2 is :";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "Arithmatic substraction of the variable1 and variable 2 is :";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "Arithmatic mutliplication of the variable1 and variable 2 is :";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "Arithmatic division of the variable1 and variable 2 is :";
    echo $variable1 / $variable2;
    echo "<br>";

    //2. Assignment operators
    $newVar=$variable1;
    echo "the value of new variable is ";
    echo $newVar;
    echo "<br>";

    //3. comparison Operators
    echo "<h2> Comparison operators</h2>";
    echo "<br>";
    
    echo"the value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";

    echo"the value of 1!=4 is";
    echo var_dump(1!=4);
    echo "<br>";

    echo"the value of 1>=4 is";
    echo var_dump(1>=4);
    echo "<br>";

    echo"the value of 1<=4 is:";
    echo var_dump(1<=4);
    echo "<br>";

    //4. increment/decrement operators
    echo $variable1++;
    echo "<br>";
    echo $variable1;
    echo "<br>";

    // echo $variable1--;
    // echo "<br>";
    // echo $variable1;

    // echo ++$variable1;
    // echo "<br>";
    // echo $variable1;

    // echo --$variable1:
    // echo "<br>";
    // echo $variable1;
    
    //5. Logical operator
    // and(&&)
    // or(||)
    // xor
    // not or !()

    $myVar=4;
    echo $myVar;
    $myVar = (true) and (true);
    /* $myVar = (true) and (true);
    /* $myVar = (false) and (true);
    /* $myVar = (true) and (false);
    /* $myVar = (false) and (false);
    /* $myVar = (true) and (true); */
    echo var_dump($myVar);

    //Data types
    //1. String
    //2. Integer
    //3. Float
    //4. Boolean
    //5. Array
    //6. Objects

    echo"<br>Data types<br>";
    $var ="This is a String";
    echo var_dump($var);
    echo"<br>";

    $var=67;
    echo var_dump($var);
    echo"<br>";

    $var = 67.1;
    echo var_dump($var);
    echo"<br>";

    $var = true;
    echo var_dump($var);
    echo "<br>";

    ?>
    </div>
</body>
</html>