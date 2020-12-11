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
    # Associative array/Hash table/Dictionary
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    echo $grades["Oscar"];
    $grades["Jim"] = "F";
    echo $grades["Jim"];
    echo count($grades);
    echo "<p></p>";
   ?>
   
   <form action="assarr.php" method="post">
     <input type="text" name="student">
     <input type="submit">
   </form>
   <?php
    echo $grades[$_POST["student"]];
    ?>

</body>
</html>
