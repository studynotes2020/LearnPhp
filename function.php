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
    function sayHi($name, $age) {
      echo "Hello $name, you are $age <br>";
    }
    sayHi("Mike", 40);
    sayHi("Dave", 19);
    sayHi("Oscar", 72);

    function cube($num) {
      return $num * $num * $num;
    }
    echo cube(4);
    ?>

</body>
</html>
