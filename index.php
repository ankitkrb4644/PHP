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
            echo"hello world and this is printed using php";
    // variables
    $variable1 = 37;
    $variable2 = 47;
    echo $variable1;
    echo $variable2;
    echo "<br>";
    //operators in PHP
    //1.Arithmatic operator
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
    //Assignment operators
    $newVar=$variable1;
    echo "the value of new variable is ";
    echo $newVar;
    echo "<br>";
    // comparison Operators
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
        ?>
    </div>
</body>
</html>