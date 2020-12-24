<?php
require_once './DbManager.php';
try {
    $db = getDb();
    $stt= $db->prepare('SELECT * FROM photo WHERE id = ?');
    $stt->bindValue(1, $_GET['id']?:1);
    $stt->execute();
    // 取得列と変数をマッピング
    $stt->bindColumn('type', $type, PDO::PARAM_STR);
    $stt->bindColumn('data', $data, PDO::PARAM_LOB);
    // フェッチモードPDO::FETCH_BOUNDでレコードを取得
    if ($stt->fetch(PDO::FETCH_BOUND)) {
        // 取得に成功した場合は、ブラウザに取得データを出力
        header("Content-Type: {$type}");
        print $data;
    } else {
        print '該当するデータがありません。';
    }
} catch (PDOException $e) {
    print "エラーコード：{$e->getCode()}<br/>";
    print "エラーメッセージ：{$e->getMessage()}<br/>";
}
