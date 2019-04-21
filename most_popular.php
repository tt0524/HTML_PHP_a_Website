<?php

if ( isset($_COOKIE['view_count']) ) {
    $temp = explode('|',$_COOKIE['view_count']);
    $prod = array_values(array_filter($temp, "even",ARRAY_FILTER_USE_KEY));
    print_r($prod);
    echo "</br>";
    $count = array_values(array_filter($temp, "odd",ARRAY_FILTER_USE_KEY));
    print_r($count);
    echo "</br>";
    $view_count = cross_merge_array($prod, $count);
    print_r($view_count);
    echo "</br>";
    arsort($view_count);
    echo "</br>";
    print_r($view_count);
    echo "</br>";
    $view_count_5 = array_slice($view_count, 0, 5);
    print_r($view_count_5);
}



function odd($var)
{
    return($var & 1);
}

function even($var)
{

    return(!($var & 1));
}

function cross_merge_array($arr1, $arr2)
    {
        $arr1 = array_values($arr1);
        $arr2 = array_values($arr2);
        $count = max(count($arr1), count($arr2));
        $arr = array();
        for ($i = 0; $i < $count; $i++) {
            if ($i < count($arr1)) $arr[] = $arr1[$i]; // 判断，避免下标越界
            if ($i < count($arr2)) $arr[] = $arr2[$i]; // 判断，避免下标越界
        }
        return $arr;
    }
?>