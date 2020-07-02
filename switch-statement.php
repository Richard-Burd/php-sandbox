<html>
  <head>
    <title>Switch Statement (switch-case)</title>
  </head>
  <body>
  <form action="index.php" method="post">
    What is your grade?
    <input type="text" name="grade">
    <input type="submit">
  </form>
  <?php
    $grade = $_POST["grade"];
    // just like JavaScript
    switch($grade) {
      case "A" :
        echo "You're amazing!";
        break;
      case "B" :
        echo "That's great!";
        break;
      default:
        echo "enter 'A' or 'B' please";
        break;
    }
  ?>
  </body>
</html>
