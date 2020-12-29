<?php
interface IFax
{
    public function send();
}
interface IPrinter
{
    public function print();
}
trait FaxTrait
{
    public function send()
    {
        print "sending Fax...sended!";
    }
}
trait PrinterTrait
{
    public function print()
    {
        print "printing...completed!";
    }
}
class FaxPrinter implements IFax, IPrinter
{
    use FaxTrait,PrinterTrait;
}
$fp =new FaxPrinter();
$fp->send();
$fp->print();
