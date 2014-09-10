<?php
  if( isset($_GET["name"], $_GET["age"]) )
  {
    if($_GET["age"]>="16" && $_GET["age"] < "18")
    {
      echo "Welkom ". $_GET["name"] ." jij bent ". $_GET["age"] ." jaar oud. <br>";
      echo "Je mag brommer rijden<br>";
    }
    elseif($_GET["age"]>="18" && $_GET["age"] < "21")
    {
      echo "Welkom ". $_GET["name"] ." jij bent ". $_GET["age"] ." jaar oud. <br>";
      echo "Je mag brommer rijden<br>";
      echo "Je mag auto rijden<br>";
    }

    elseif($_GET["age"]>="21")
    {
      echo "Welkom ". $_GET["name"] ." jij bent ". $_GET["age"] ." jaar oud. <br>";
      echo "Je mag brommer rijden<br>";
      echo "Je mag auto rijden<br>";
      echo "Je mag in zware voertuigen rijden<br>";
    }

    exit();
}
    

?>
<html>
<body>
  <form action="<?php $_PHP_SELF ?>" method="GET">
  Name: <input type="text" name="name" />
  Age: <input type="text" name="age" />
  <input type="submit" />
  </form>
</body>
</html>

