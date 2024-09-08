<?php
define('host','localhost:3310');
define('usr','root');
define('pass',"");
define('database','tclk60');


$db = new mysqli();

@$db->connect(host,usr,pass);

$db->select_db(database);
if($db->connect_errno) {
    echo $db->connect_error ;
    exit();
}
echo $db->error;




?>