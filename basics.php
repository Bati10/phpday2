<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 2 basics</title>
    <style>
        p {
            color: blue;
        }

        .green {
            color : green;
        }

        .red {
            color: red;
        }
    </style>
</head>
<body>
    <p>excercise 1:</p>
    <form method="GET">
        Name: <input type="text" name="name" placeholder="Name">
        Surname: <input type="text" name="surname" placeholder="Surname">
        <input type="submit" value="submit" name="submit" />
    </form>

    <?php 
    if(isset($_GET["submit"])) {
        if($_GET["name"] && $_GET["surname"]) {
            echo "Welcome" . ' ' . $_GET["name"] . ' ' . $_GET["surname"];
        }
        else {
            echo "plesase insert your name" ;
        }
    }
    
    
    ?>  
      

<p>excercise 2:</p>

  
   <?php
    
    function divide($num1, $num2){
           $var1 = $num1 / $num2;
           echo "Result is : $var1";
    }

    ?>

    <?php 
    divide(10,2);
    ?>

<p>excercise 3:</p>

<?php
    
    function sumofnum($math, $physics, $english){
           $sum1 = $math + $physics + $english;
           $sum2 = $sum1 / 3;
           echo "Sum of grades are : $sum1  <br> Avarege grade is: $sum2";
    }

    ?>

    <?php 
    sumofnum(3,4,5);
    ?>

<p>excercise 4:</p>

<?php
    
    function excercise4($num1, $num2, $num3){
           $area = $num1 * $num2;
           $volume = $area * $num3;
           echo "The area of the box is: $area <br>The volume of the box is: $volume";
    }

    ?>

    <?php 
    excercise4(7,2,5);
    ?>

<p>excercise 5:</p>

<?php
    
    function excercise5($num1){
        $hours = floor ($num1 / 60);
        $minutes = ($num1 - floor($num1 / 60) * 60);

        echo "$num1 minute(s) = $hours hours(s) and $minutes minute(s)" ;
           
    }

    ?>

    <?php 
    excercise5(200);
    ?>

<p>excercise 6:</p>

    <form method="post">
        Name: <input type="text" name="name" placeholder="Name">
        Surname: <input type="text" name="surname" placeholder="Surname">
        <input type="submit" value="submit" name="submit1" />
    </form>

    <?php 
    if(isset($_POST["submit1"])) {
        if(strlen($_POST["name"]) > 5) {
            echo "<p class='green'>{$_POST['name']}</p>";
        }
        else {
            echo "<p class='red'>{$_POST['name']}</p>";
        }
    }
 
   ?>

  

  
   
  
    



</body>
</html>