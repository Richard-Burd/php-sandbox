<html>
  <head>
    <title>Inheritance</title>
  </head>
  <body>
    <h3>Inheritance</h3>
    <?php
      class Chef {
        function makeChicken(){
          echo "The chef makes chicken <br>";
        }

        function makeSalad(){
          echo "The chef makes salad <br>";
        }

        function makeSpecialDish(){
          echo "The chef makes bbq ribs <br>";
        }
      }

      // sushi chef can do everything anItalian chef can do,
      // except make pesto.
      class sushiChef extends Chef {
        // only a sushi chef can make sushi
        function makeSushi(){
          echo "The chef makes sushi <br>";
        }

        // this one is the same name as the one above...
        // but it overides it because it is in this class here
        function makeSpecialDish(){
          echo "The chef makes sashimi";
        }
      }

      $sushiChef = new sushiChef();
      $sushiChef->makeChicken();
      $sushiChef->makeSalad();
      $sushiChef->makeSushi();
      $sushiChef->makeSpecialDish();

    ?>
  </body>
</html>
