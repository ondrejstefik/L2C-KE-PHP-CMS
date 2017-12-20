<?php

require_once  dirname(__FILE__).'/../framework/helpers.php';
$result=db_query("SELECT * FROM Pages");

while ($row=mysqli_fetch_row($result)){
    var_dump($row);  
  }
?>