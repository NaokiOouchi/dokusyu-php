<?php
function increment(int &$num):int
{
    return ++$num;
}
$value = 10;
print increment($value);
