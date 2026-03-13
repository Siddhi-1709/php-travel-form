<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Php Tutorial</title>
</head>
<style>
     *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
     }
.container{
     max-width: 80%;
     background-color: rgb(248, 200, 200);
     margin: auto;
     padding: 23px;
}
</style>
<body>
     <div class="container">
          <h1>Lets learn about php</h1>
          <p> Yourv party status is here: </p>
          <?php
          $age = 12;
          if ($age>18){
               echo "You can go to the Party";
          }
          else if($age==7){
               echo "You are 7 years old";
          }
          else{
               echo "You cannot go to the Party";
          }

          //Array in Php
          $languages = array("Python", "C++", "Php", "NodeJS");
          echo count($languages);
          echo $languages[1];

          //Loops in Php
          $a = 0;
          while ($a <= 10) {
               echo "<br> The value of a is: ";
               echo $a;
               $a++;
          }

          //Iterating Arrays in Php using While loop
          $a = 0;
          while ($a < count($languages)) {
               echo "<br> The value of language is: ";
               echo $languages[$a];
               $a++;
          }

          //Do While loop
          $a = 200;
          do {
               echo "<br> The value of a is: ";
               echo $a;
               $a++;
          } while ($a < 10);

          //for Loop
          for ($a=60; $a < 10; $a++) { 
               echo "<br> The value of a from the for loop is: ";
               echo $a;
          }

          //foreach Loop
          foreach ($languages as $value) {
               echo "<br> The value from foreach loop is ";
               echo $value;
          }
          ?>

     </div>
</body>
</html>