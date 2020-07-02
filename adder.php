<html>
  <head>
    <title>Basic Calculator</title>
  </head>
  <body>
    <!-- This will build out a calculator -->
    <form action="adder.php" method="get">
      <h3>Add this number:</h3>
      <!-- user can only enter in numbers -->
      <input type="number" name="num1">
      <br>
      <h3>...and this number:</h3>
      <input type="number" name="num2">
      <input type="submit">
    </form>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
    <?php ?>
  </body>
</html>
