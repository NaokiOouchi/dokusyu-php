<?php
$now=new DateTime();
print $now->format('Y年m月d日 (D) g:i:s a').'<br />';
print $now->format('L')?'閏年です'.'<br />':'閏年ではありません'.'<br />';
print $now ->format('DateTime::ISO8601');
