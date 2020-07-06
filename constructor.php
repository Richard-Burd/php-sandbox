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

        // constructor function gets run each time
        // a new instance of this class is created
        // it can take in variables.
        function __construct($name){
          echo "New book created for $name <br>";
        }
      }
      // create 1st instance of the class:
      $book1 = new Book("Mike");
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = 400;

      // create 2nd instance of the class:
      $book2 = new Book("Tom");
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
