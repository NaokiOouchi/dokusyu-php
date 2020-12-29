<?php
require_once "MyClass.php";

$cls = new MyClass();
foreach ($cls as $key=>$value) {
    print "{$key}:{$value}<BR>";
}
print "<hr>";
$cls->showProperty();
