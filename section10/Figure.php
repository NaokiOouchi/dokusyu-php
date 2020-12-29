<?php
abstract class Figure
{
    protected $width;
    protected $height;
    abstract protected function getArea():float;
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}
