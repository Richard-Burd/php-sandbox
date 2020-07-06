<html>
  <head>
    <title>Creating Classes</title>
  </head>
  <body>
    <h3>Book Class</h3>
    <?php
      // use capitol letters for class name
      // (as convention, not required)
      class Book {
        var $title;
        var $author;
        var $pages;
      }
      // create 1st instance of the class:
      $book1 = new Book();
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = 400;

      // create 2nd instance of the class:
      $book2 = new Book();
      $book2->title = "Lord of the Rings";
      $book2->author = "JRR Tolkien";
      $book2->pages = 700;

      // show the book titles:
      echo $book1->title;
      echo "<br>";
      echo $book2->title;
    ?>
  </body>
</html>
