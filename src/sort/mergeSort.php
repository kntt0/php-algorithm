<?php

// merge sort
function mergeSort(&$arr)
{
    $arr = mergeSortSplit($arr);
}

// 分割
function mergeSortSplit(&$arr)
{
    if (count($arr) == 1) return $arr;
    // とにかく半分にする
    $mid   = floor(count($arr) / 2);
    $left  = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid, count($arr));
    // 再帰的に分解する
    $left  = mergeSortSplit($left);
    $right = mergeSortSplit($right);
    return mergeSortMerge($left, $right);
}

// 結合
function mergeSortMerge($left, $right)
{
    $result = [];
    // 左右を小さい順に追加
    while (count($left) && count($right)) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    // 半端な残りの要素を追加
    return array_merge($result, $left, $right);
}

// 利用例
$arr = [1, 100, 24, 40, 12, 4];
mergeSort($arr);
echo implode(', ', $arr). "\n";