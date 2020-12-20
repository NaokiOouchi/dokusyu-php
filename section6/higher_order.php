<?php
// ↓高階関数
function my_array_walk(array $array, callable $func)
{
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}

// ↓コールバック関数
function showItem($value, $key)
{
    print "{$key}:{$value}<br />";
}

$result = 0;
// ↓コールバック関数
function sum(float $value, int $key)
{
    global $result;
    $result += $value;
}

$data = ['杉山','長田','杉沼','和田','土井'];
my_array_walk($data, 'showItem');

$data = [100,50,10,5];
my_array_walk($data, 'sum');
print "{$result}";
