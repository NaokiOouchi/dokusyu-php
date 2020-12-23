<?php
$dt1 =new DateTime('2020/12/23 20:21:22');
$dt2 =new DateTime('2020/12/25');
$interval1 = $dt1->diff($dt2, true);
//DateIntervalの書式は%がつく
print $interval1->format('%Y-%m-%d %H:%i:%s').'<br />';

$interval1 = $dt1->diff($dt2, false);
//DateIntervalの書式は%がつく
print $interval1->format('%R%Y-%m-%d %H:%i:%s').'<br />';
$interval2 = $dt2->diff($dt1, false);
//DateIntervalの書式は%がつく
print $interval2->format('%R%Y-%m-%d %H:%i:%s').'<br />';
