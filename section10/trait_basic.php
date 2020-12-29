<?php
require_once "MachineTrait.php";
class Fax
{
    use MachineTrait;
    public function send()
    {
        print "sendinf Fax...sended!";
    }
}
$fx = new Fax();
$fx->run();
$fx->send();
