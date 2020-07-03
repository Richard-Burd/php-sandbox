<html>
  <head>
    <title>For Loop</title>
  </head>
  <body>
    <!-- Here is the while loop -->
    <?php
      $index = 1;
      while($index <= 5) {
        echo "$index <br>";
        $index++; // same as index = index + 1
      }
    ?>
    <hr>
    <!-- Here is the for loop doing the same thing -->
    <?php
      for($i = 1; $i <= 5; $i++){
        echo "$i <br>";
      }
    ?>
    <hr>
    <!-- Here is the for loop iteraing over an array -->
    <?php
      $luckyNumbers = array(7, 21, 18, 613, 1880);
      for($i = 1; $i < count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] <br>";
      }
    ?>

  </body>
</html>
