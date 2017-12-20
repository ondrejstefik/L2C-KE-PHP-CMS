<?php

require_once  dirname(__FILE__).'/config/database.php';
$schema_path= dirname(__FILE__).'/resources/database.sql';

exec("mysql -u{$database['user']} -p{$database['pass']} -h {$database['host']} -D {$database['name']} < {$schema_path}");
?>