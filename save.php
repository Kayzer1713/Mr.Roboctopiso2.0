<?php
  $myFile = "sources/general.json";
  $fh = fopen($myFile, 'w') or die("can't open file");
  $stringData = $_POST["data"];
  print($stringData);
  fwrite($fh, $stringData);
  fclose($fh);
?>
