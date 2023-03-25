<?php



function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    //ends everything that happens before die();
    die();
  }
  
   
function uriIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}