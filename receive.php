<?php

$key  = $_REQUEST["key"];
$id   = $_REQUEST["id"];
$data = $_REQUEST["data"];

if($key != "5up3r53cr3tPa5word") {
  echo "Wrong password!";
  exit("Wrong password!");
}

?>
