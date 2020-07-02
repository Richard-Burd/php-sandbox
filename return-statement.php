<html>
  <head>
    <title>Return Statement</title>
  </head>
  <body>
    <?php
      function cube($num){
        // return statement
        return $num * $num * $num;
      }
      // if you echo a variable like this
      // a return statement is necessary
      echo $cubeResult = cube(4);
    ?>
  </body>
</html>
