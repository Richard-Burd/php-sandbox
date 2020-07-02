<html>
  <head>
    <title>Associative Array</title>
  </head>
  <body>
    <form action="associative-array.php" method="post">
      <input type="text" name="student">
      <input type="submit">
    </form>
    <?php
      // associative arrays are like
      // JavaScript Objects or Ruby hashes
      $grades = array("Jim" => "A+", "Tom" => "B", "Ron" => "C+");
      // echo $grades["Jim"]; // => "A+"
      // This will return the value of the key entered in the form
      echo $grades[$_POST["student"]];
    ?>
  </body>
</html>
