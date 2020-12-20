<?php
function readFiles(array $files)
{
    // 配列から順にファイルパスを取り出す
    foreach ($files as $file) {
        // ジェネレータreadLinesに処理を委ねる
        yield from readLines($file);
    }
}

function readLines(string $path)
{
    $file = fopen($path, 'rb') or die('ファイルが見つかりません。');
    // 行単位にテキストを取得&yield
    while ($line = fgets($file, 1024)) {
        yield $line;
    }
    fclose($file);
}
foreach (readFiles(['sample.dat','sample2.dat']) as $line) {
    print $line.'<br />';
}
