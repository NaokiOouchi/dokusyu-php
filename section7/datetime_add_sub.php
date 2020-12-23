<?php
$dt =new DateTime('2020/12/23 20:21:22');
// P<日付感覚>T<時間感覚>
print $dt ->format('Y-m-d H:i:s').'<br />';
$dt->add(new DateInterval('P1YT10H'));
print $dt ->format('Y-m-d H:i:s').'<br />';
$dt->sub(new DateInterval('P3MT20M'));
print $dt ->format('Y-m-d H:i:s').'<br />';
