<?php
function factorial(int $num):int
{
    if ($num !== 0) {
        return $num * factorial($num -1);
    }
    return 1;
}
// 5 * factorial(4)
// 5 * 4 * factorial(3)
// 5 * 4 * 3 * factorial(2)
// 5 * 4 * 3 * 2 * factorial(1)
// 5 * 4 * 3 * 2 * 1 * factorial(0)
// 5 * 4 * 3 * 2 * 1 * 1
print factorial(5);
