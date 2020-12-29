<?php
function hoge(int $x)
{
}
try {
    hoge("xxx");
} catch (Exception $e) {
    print "エラーメッセージ1：{$e->getMessage()}";
} catch (Error $e) {
    print "エラーメッセージ2：{$e->getMessage()}";
}
