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
    class Movie {
      public $title;  // var and public almost interchangeable
      private $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        $this->setRating($rating);
      }

      function getRating() {
        return $this->rating;
      }

      function setRating($rating) {
        if ($rating=="G" || $rating=="PG" || $rating=="PG-13" || $rating=="R")
          $this->rating = $rating;
        else
          $this->rating = "NR";
      }
    }

    $avengers = new Movie("Avengers", "Dog");
    echo $avengers->getRating();

    ?>

</body>
</html>
