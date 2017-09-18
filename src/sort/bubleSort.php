<?php
// バブルソート
function bubbleSort(&$arr)
{
    $size = count($arr);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < ($size - 1 - $i); $j++) {
            if ($arr[$j + 1] < $arr[$j]) {
                $tmp         = $arr[$j + 1]; // swap
                $arr[$j + 1] = $arr[$j];
                $arr[$j]     = $tmp;
            }
        }
    }
}

// バブルソート
$arr = [100, 3, 30, 20, 44, 32];
bubbleSort($arr);
echo implode(', ', $arr). "\n";