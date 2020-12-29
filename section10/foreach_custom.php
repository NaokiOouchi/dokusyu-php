<?php
require_once "Person4.php";
require_once "FriendList.php";

$list = new FriendList();
$list->add(new Person("太郎", "山田"));
$list->add(new Person("奈美", "掛谷"));
$list->add(new Person("憲", "高江"));

foreach ($list as $value) {
    print $value->show();
}
