<?php

$key  = $_REQUEST["key"];
$id   = $_REQUEST["id"];
$data = $_REQUEST["data"];

if($key != "superSecretPassword") {
  echo "Wrong password!";
  exit("Wrong password!");
}

?>
