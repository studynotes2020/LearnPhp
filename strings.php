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
    $phrase = "Giraffe Academy";
    echo strtolower($phrase);
    echo strtoupper($phrase);
    echo $phrase[4];
    echo "<p></p>";
    $phrase = "Giraffe Academy";
    echo substr($phrase, 8, 3);
    echo str_replace("Giraffe", "Panda", $phrase);
  ?>

</body>
</html>
