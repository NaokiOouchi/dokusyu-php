<?php
require_once './DbManager.php';
try {
    $db = getDb();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->beginTransaction();
    $db->exec("INSERT INTO 
    book(isbn,title,price,publish,published)
    VALUES
    ('978-4-7981-2151-2','独習PHP 第二版',3200,'翔泳社','2016-06-01')");
    $db->exec("INSERT INTO 
    book(isbn,title,price,publish,published)
    VALUES
    ('978-4-7981-2151-2','ひとりで学ぶPHP',3500,'翔泳社','2016-06-01')");
    $db->commit();
} catch (PDOException $e) {
    $db->rollBack();
    print "エラーコード：{$e->getCode()}<br/>";
    print "エラーメッセージ：{$e->getMessage()}<br/>";
}
