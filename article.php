<html>
  <head>
    <title>How to Include other Files</title>
  </head>
  <body>
    <?php
      $title = "My first post";
      $author = "Bob";
      $wordCount = 400;
      // imports another PHP file & uses it to
      // display the values defined for the
      // variables above
      include "article-header.php"
    ?>
  </body>
</html>
