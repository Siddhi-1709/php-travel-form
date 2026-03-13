<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="Container">
        This is my first PHP Website
        <?php
        
             echo "Hello World and this is printed using php";
             // Single line comment

        /*
             this
             is
             a 
             multi
             line
             comment
        */

             $variable1 = 5;
             $variable2 = 2;
             echo $variable1;
             echo $variable2;

             echo $variable1 + $variable2;

          // Arithmetic Operators
             echo "<br>";
             echo "The value of variable1 + variable2 is ";
             echo $variable1 + $variable2;

             echo "<br>";
             echo "The value of variable1 - variable2 is ";
             echo $variable1 - $variable2;

             echo "<br>";
             echo "The value of variable1 * variable2 is ";
             echo $variable1 * $variable2;

             echo "<br>";
             echo "The value of variable1 / variable2 is ";
             echo $variable1 / $variable2;
             echo "<br>";

          // Assignment Operators
            $newVar = $variable1;
            //$newVar += 1;
            //$newVar -= 1;
            //$newVar *= 2;
            $newVar /= 2;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>";

            //Comparison Operators
            //echo "<h1> Comparison Operators </h1>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);
            echo "<br>";
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";

            //Increment/Decrement Operators
            //echo $variable1++;
            //echo $variable1--;
            //echo ++$variable1;
            echo --$variable1;
            echo "<br>";
            echo $variable1;

            //Logical Operators
            // and (&&)
            // or (||)
            // xor 
            // !

            // $myvar = (true and true);
            // $myvar = (false and true);
            // $myvar = (false and false);
            // $myvar = (true and false);
            $myvar = (true xor true);
            echo "<br>";
            echo var_dump($myvar);
            ?>

            <?php

            // Data Types in PHP
            // 1) String
            // 2) Integer
            // 3) Float
            // 4) Boolean
            // 5) Array 
            // 6) Object 

            echo "<br> Data Types <br>";
            $var = "This is the String";
            echo var_dump($var);
            echo "<br>";

            $var = 67;
            echo var_dump($var);
            echo "<br>";

            $var = 67.2;
            echo var_dump($var);
            echo "<br>";

            $var = True;
            echo var_dump($var);
            echo "<br>";

            $var = new stdClass();
            $var->name = "Siddhi";
            $var->age = 20;
            echo var_dump($var);
            echo "<br>";

            $var = array(10, 20, 30);
            echo var_dump($var);

            ?>
          
          

          <?php
          //echo "Hello World Again";
          ?>
             
        
</div>
</body>
</html>