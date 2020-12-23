<?php
$now=new DateTime();
$now->setDate(2020,12,23);
$now->setTime(20,23,20);
print $now ->format('Y年m月d日 H:i:s');
