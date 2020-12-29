<?php
require_once "MyMail.php";
try {
    $m = new MyMail();
    $m->to = "noouchi4@gmail.com";
    $m->subject ="テストメール";
    $m->message ="こんにちは、Mymailクラスです。";

    $m->From = "admin@example.com";
    $m->X_Mailer = "MyMail 1.0";
    $m->X_Priority = 1;
    $m->X_MSMail_Priorit = "High";

    $m->send();
} catch (Error $e) {
    print $e;
}
