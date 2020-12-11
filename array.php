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
    $friends = array("Kvein", "Dav", "Osc", "Jim", 1, false);
    echo $friends[1];
    $friends[1] = 400;  # update
    echo $friends[1];
    $friends[6] = 200;  # add value
    echo $friends[6];
    echo "<p></p>";
    echo count($friends);
   ?>

</body>
</html>
