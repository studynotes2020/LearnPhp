<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>
<body>
  <form action="calculator.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <input type="submit">
  </form>
  <br>
  Add: <?php echo $_GET["num1"] + $_GET["num2"] ?>
  <br>
  Division: <?php echo $_GET["num1"] * $_GET["num2"] ?>
  <p></p>
  <form action="calculator.php" method="post">
    First Num: <input type="number" step="0.1" name="num1"> <br>
    OP: <input type="text" name="op" value=""> <br>
    Second Num: <input type="number" name="num2"> <br>
    <input type="submit">
  </form>

  <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];
    if ($op == "+") {
      echo $num1 + $num2;
    } elseif ($op == "-") {
      echo $num1 - $num2;
    } elseif ($op == "/") {
      echo $num1 / $num2;
    } elseif ($op == "*") {
      echo $num1 * $num2;
    } else {
      echo "Invalid Operator";
    }
  ?>

</body>
</html>
