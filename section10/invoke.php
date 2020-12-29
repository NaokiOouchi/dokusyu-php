<?php
require_once "Person4.php";
require_once "FriendList.php";

$list = new FriendList();
$list->add(new Person("太郎", "山田"));
$list->add(new Person("奈美", "掛谷"));
$list->add(new Person("県", "高江"));

print $list(1);
