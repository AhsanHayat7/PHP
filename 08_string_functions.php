<?php
 $name = "John Alex";
  echo $name;
  echo "<br>";

  echo "The lenght " . "of my string is ". strlen($name);
  echo "<br>";
  echo str_word_count($name);
  echo "<br>";
  echo strrev($name);
  echo "<br>";
  echo strpos($name,"Al");
  echo "<br>";
  echo str_replace("John","Tom",$name);
  echo str_repeat($name, 3);
  echo "<br>";
  echo "<pre>";
  echo rtrim("    HE is developer    ");
  echo "<br>";
  echo ltrim("  HE is developer");
  echo "<pre>"

?>
