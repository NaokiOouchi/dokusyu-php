<?php
require_once 'MySmarty.class.php';
$s = new MySmarty();
$s->assign('books', [[
  'isbm'=>'978-4-7981-4402-3',
  'title'=>'独習ASP.NET 第5版',
  'price'=>3800,
  'published'=>'2016-01-21',],
  [
    'isbm'=>'978-4-7981-4402-234',
    'title'=>'独習ASP.NET 第2134版',
    'price'=>3802340,
    'published'=>'20126-01-21',]
]);
$s->d();
