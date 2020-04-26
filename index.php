<?php
// Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);
/*
 *Name: Chunhai Yang
 * Date: 4/24/2020
 * URL: https://github.com/charlieyang1986/pp2.git
 * Pair Program 2
 */



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 2</title>
</head>
<body>
   <header>
       <h1>Pair Program 2</h1>
   </header>

      <?php
           echo "PHP Array Practice.";
           $numbers = Array(7,9,8,9,8,8,6);

            include 'functions.php';
            printArr($numbers);
            echo largest($numbers);
            echo removeDups($numbers);

      ?>
</body>
</html>
