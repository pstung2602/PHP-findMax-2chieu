<?php
function findMax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}

$array = [
    [12, 2, 3, 4, 6, 8, 9, 0, 1222],
    [1, 32, 3, 4, 6, 8, 9, 0, 12],
    [1, 2, 3, 44, 6, 8, 9, 0, 312],
];

echo findMax($array);


?>
