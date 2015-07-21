<?php

//Get information from the request
$key  = $_REQUEST["key"];
$id   = $_REQUEST["id"];
$data = $_REQUEST["data"];

//Various conditionals to make sure this is a valid request
if($key != "superSecretPassword") {
  exit("Wrong password!");
}
if(!isset($id)) {
  exit("No ID supplied!");
}
if(!isset($data)) {
  exit("No data supplied!");
}


?>
