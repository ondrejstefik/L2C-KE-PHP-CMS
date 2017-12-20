<?php

function db_connect(){
    require_once  dirname(__FILE__).'/../config/database.php';
    $mysqli = mysqli_connect($database["host"],$database["user"],$database["pass"],$database["name"],$database["port"]);
    return $mysqli;
}
function db_query($sqlstring){
$databasa=db_connect();
$result = mysqli_query($databasa, $sqlstring);
return $result;

}



?>