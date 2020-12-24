<?php
require_once './DbManager.php';
try {
    $db = getDb();
    // Insert命令の準備
    $stt = $db->prepare('INSERT INTO 
    photo(type,data)
    VALUES
    (:type,:data)
    ');
    // プレースホルダにアップロードファイルの情報をセット
    $file = fopen($_FILES['photo']['tmp_name'], 'rb');
    $stt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
    $stt->bindValue(':data', $file, PDO::PARAM_LOB);

    // INSERT命令を実行
    $stt->execute();
    print '写真のアップロードに成功しました。';
} catch (PDOException $e) {
    print "エラーコード：{$e->getCode()}<br/>";
    print "エラーメッセージ：{$e->getMessage()}<br/>";
}
