<?php
require_once './DbManager.php';
try {
    $db = getDb();
    $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
    print_r($db->query('select * from book')->fetchAll(PDO::FETCH_ASSOC));
} catch (PDOException $e) {
    print "エラーコード：{$e->getCode()}<br/>";
    print "エラーメッセージ：{$e->getMessage()}<br/>";
}
