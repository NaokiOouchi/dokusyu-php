<?php
function getDb()
{
    $dsn = 'mysql:dbname=selfphp; host=127.0.0.1:8889; charset=utf8';
    $usr = 'selfusr';
    $passwd='selfpass';
    
    $db = new PDO($dsn, $usr, $passwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
