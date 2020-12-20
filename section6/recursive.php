<?php
function func(int $num):int
{
    if ($num !== 0) {
        return $num + func($num -1);
    }
    return 0;
}
// 5 + factorial(4)
// 5 + 4 + factorial(3)
// 5 + 4 + 3 + factorial(2)
// 5 + 4 + 3 + 2 + factorial(1)
// 5 + 4 + 3 + 2 + 1 + factorial(0)
// 5 + 4 + 3 + 2 + 1 + 0
// → 15
print func(5);
