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
    $isMale = true;
    $isTall = false;
    if ($isMale && $isTall) {
      echo "You are a tall male";
    } elseif ($isMale || !$isTall) {
      echo "You are a short male";
    } elseif (!isMale && $isTall) {
      echo "You are not mall but are tall";
    }else {
      echo "You are not male";
    }
    echo "<p></p>";

    function getMax($num1, $num2, $num3) {
      if($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
      } elseif($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
      } else {
        return $num3;
      }
    }
    echo getMax(300, 90, 100);

    ?>

</body>
</html>
