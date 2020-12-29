<?php
class TriangleFigure
{
    private $base;
    private $height;
    public function __construct()
    {
        $this->setBase(1);
        $this->setHeight(1);
    }

    // baseプロパティのゲッターメソッド
    public function getBase():float
    {
        return $this->base;
    }
    // baseプロパティのセッターメソッド
    public function setBase(float $base)
    {
        if ($base > 0) {
            $this->base = $base;
        }
    }

    // heightプロパティのゲッターメソッド
    public function getHeight():float
    {
        return $this->height;
    }
    // heightプロパティセッターメソッド
    public function setHeight(float $height)
    {
        if ($height > 0) {
            $this->height = $height;
        }
    }

    public function getArea():float
    {
        return $this->getBase() * $this->getHeight() /2;
    }
}
