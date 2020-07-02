<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      // with brackets
      echo("Hey There");
      // make a horizontal rule
      echo "<hr>";
      // without brackets
      echo "Hey There";
      // with HTML tage
      echo "<h1>My Site</h1>";

      // store variables and put them into HTML:
      $myName = "John";
      $myAge = 36;
      echo "<p>I am $myName and I'm $myAge</p>";
      echo "<hr>";

      // datatypes
      $string = "Hello World";
      echo "'$string' starts with an: $string[0]";
      echo "<br>";
      // replace a word in string with new word
      echo str_replace("World", "Earth", $string);
      echo "<br>";
      // grab a substring
      echo substr($string, 0, 4);
      echo "<br>";
      $integer = 30;
      $float = 30.1;
      $boolean = true;
      echo "<hr>";
      // find highest number
      echo max(10, 2);
      echo "<br>";
      // find lowest number
      echo min(10, 2);
      echo "<br>";
      // round to nearest integer
      echo round(3.1);
      echo "<br>";
      // round up (to integer)
      echo ceil(3.1);
      echo "<br>";
      // round down (to integer)
      echo floor(3.1);
      echo "<br>";
      echo "<hr>";
    ?>

    <?php
    // user input

    ?>
  </body>
</html>
