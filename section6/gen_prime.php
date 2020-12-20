<?php
function getPrimes()
{
    $num = 2; // 素数の開始値
    // 2から順に素数判定し、素数の場合にだけyield(無限ループ)
    while (true) {
        if (isPrime($num)) {
            yield $num;
        }
        $num++;
    }
}
function isPrime(int $value):bool
{
    $prime = true; // 素数かどうかを表すフラグ
    // 2 ~sqrt($value)で、余りが0かどうか
    for ($i = 2; $i<= floor(sqrt($value));$i++) {
        if ($value % $i === 0) {
            $prime = false;
            break;
        }
    }
    return $prime;
}

// 素数を順に出力
foreach (getPrimes() as $prime) {
    // 素数が101以上になったら終了
    if ($prime > 100) {
        die();
    }
    print $prime.',';
}
