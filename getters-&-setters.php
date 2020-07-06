<html>
  <head>
    <title>Getters & Setters</title>
  </head>
  <body>
    <h3>Getter & Setter Methods</h3>
    <?php
      // use capitol letters for class name
      // (as convention, not required)
      class Book {
        // "public" is a visibility modifier
        // "public" and "var" are basically the same
        // "public" is open to the world to be modified
        public $title;
        public $author;

        // "private" is a visibility modifier
        // "private" cannot be accessed outside the class declaration
        private $pages;
        private $rating;

        // constructor function gets run each time
        // a new instance of this class is created
        // it can take in variables to define instance variables.
        function __construct($aTitle, $aAuthor, $aPages){
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;

          // this will not be defined in the original constructor
          // it could be, but we're showing one less layer of
          // abstraction below.
          // $this->rating = $aRating;
        }

        // example of an object function:
        function hasManyPages(){
          if($this->pages >= 500){ // 500 is a lot of pages
            return " (short book)";
          }
          return " (long book)";
        }

        // here is a getter method:
        function getRating(){
          return $this->rating;
        }

        // here is a setter method,
        // establish valid values for $rating atteribute:
        function setRating($rating){
          if( // check to see if the rating the user put in is valid:
            $rating == " G" ||
            $rating == " PG" ||
            $rating == " PG-13" ||
            $rating == " R"
            ){
            $this->rating = $rating;
          } else {
            $this->rating = " unavailable!";
          }

        }
      }
      // create class instances with constructor:
      $book1 = new Book("Harry Potter", "JK Rowling", 400);
      $book2 = new Book("Lord of the Rings", "JR Tolkien", 700);
      $book3 = new Book("1001 Nights", "Scheherazade", 16308);

      echo $book1->title;
      echo $book1->hasManyPages();
      echo $book1->setRating(" PG-13");
      echo $book1->getRating();
      echo "<br>";
      echo $book2->title;
      echo $book2->hasManyPages();
      echo $book2->setRating(" G");
      echo $book2->getRating();
      echo "<br>";
      echo $book3->title;
      echo $book3->hasManyPages();
      echo $book3->setRating(" NR");
      echo $book3->getRating();
    ?>
  </body>
</html>
