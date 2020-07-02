<html>
  <head>
    <title>Conditional (if-elseing-else)</title>
  </head>
  <body>
    <?php
      $myPerson = "present"; // change to: "home"
      $myVerification = true; // change to: false
      // same as in JavaScript... && ||
      if ($myPerson == "present" && $myVerification){
        echo "You're here!";
      } elseif ($myPerson == "home") {
        echo "I see you're at home";
      } else {
        echo "I dunno where you are";
      }
    ?>
  </body>
</html>
