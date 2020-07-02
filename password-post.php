<html>
  <head>
    <title>Password Page</title>
  </head>
  <body>
    <!-- method must be "post" to remove it from URL -->
    <form action="password-post.php" method="post">
      <!-- type="password" makes the dots appear in textbox -->
      Password: <input type="password" name="password"> <br>
      <input type="submit">
    </dorm>
    <br>
    <?php
      echo $_POST["password"]
    ?>
  </body>
</html>
