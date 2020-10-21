<?php
echo "hello";

$arr = [1, 4, 5, 2, 9, 7, 3, 5, 1];
function selectionSort($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $count; $j++) {
        if($arr[$min]>$arr[$j]){
            $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}

echo "<pre>";
print_r(selectionSort($arr));