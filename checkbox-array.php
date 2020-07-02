<html>
  <head>
    <title>Checkboxes & Array Iteration</title>
  </head>
  <body>
    <h1>Select the checkboxes & HTML will put then intp an array</h1>
    <!-- this will make sure to utilize the PHP code on this page below -->
    <form action="checkbox-array.php" method="post">
      <!-- the box [] puts selections into an array -->
      Apples <input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges <input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears <input type="checkbox" name="fruits[]" value="pears"><br>
      Cherries <input type="checkbox" name="fruits[]" value="cherries"><br>
      <input type="submit">
      <h1>PHP will then iterate over that array & display each element:</h1>
      <?php
        $fruits = $_POST["fruits"];
        // iterate over elements in an array & print each one
        foreach ($fruits as $myItem) {
          echo "<p>$myItem</p>";
        }
      ?>
    </form>
  </body>
</html>
