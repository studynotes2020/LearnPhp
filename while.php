<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>
<body>
   <?php
    $index = 1;
    while ($index <= 5) {
      echo "$index <br>";
      $index++;
    }
    echo "<p></p>";

    $index = 6;
    do {
      echo "$index <br>";
      $index++;
    } while ($index <= 5);
    echo "<p></p>";
    
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    for($i = 0; $i <= count($luckyNumbers); $i++) {
      echo "$luckyNumbers[$i] <br>";
    }
    ?>

</body>
</html>
