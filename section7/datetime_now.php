<?php
$now=new DateTime();
// クラスのインスタンスプロパティやメソッドにはアロー(->)でアクセスする
print $now ->format('Y年m月d日 H:i:s');
