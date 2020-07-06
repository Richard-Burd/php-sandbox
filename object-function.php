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
        // it can take in variables to define instance variables.
        function __construct($aTitle, $aAuthor, $aPages){
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }

        // example of an object function:
        function hasManyPages(){
          if($this->pages >= 500){ // 500 is a lot of pages
            return " (short book)";
          }
          return " (long book)";
        }
      }
      // create class instances with constructor:
      $book1 = new Book("Harry Potter", "JK Rowling", 400);
      $book2 = new Book("Lord of the Rings", "JR Tolkien", 700);

      echo $book1->title;
      echo $book1->hasManyPages();
      echo "<br>";
      echo $book2->title;
      echo $book2->hasManyPages();
    ?>
  </body>
</html>
