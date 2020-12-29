<?php
class Person
{
    public $firstName;
    public $lastName;
    public function show()
    {
        print "<p>僕の名前は{$this->lastName}{$this->firstName}です。</p>";
    }
}
