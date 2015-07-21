<?php

$key  = $_REQUEST["key"];
$id   = $_REQUEST["id"];
$data = $_REQUEST["data"];

if($key != "superSecretPassword") {
  exit("Wrong password!");
}

?>
