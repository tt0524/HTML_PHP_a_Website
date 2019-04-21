<?php
$uri = (string)$_SERVER['REQUEST_URI'];

// cookie to record recently viewed products
if (!isset($_COOKIE['history'])) {           // if no product history
    $his[] = $uri;                           // just store product uri
 } else {                                    // if product history not empty
    $his = explode('|',$_COOKIE['history']);  // explode
    if (in_array($uri, $his)){
        $pos = array_search($uri, $his);
        if ($pos == 0){
            $new_his = array_slice($his, $pos+1);
        } else {
            $new_his = array_merge(array_slice($his, 0, $pos), array_slice($his, $pos+1));
        }
        $his = $new_his;
    }
    array_unshift($his, $uri);
    if (count($his) > 5) {             // store 5 url
        array_pop($his);
    }
 }
$expire=time()+60*60*24*30;
setcookie('history',implode('|', $his),$expire);

// cookie to record the view count of each products
// if counts cookie not exist, create cookie and set count = 1
if (!isset($_COOKIE['view_count'])) {           
    $view_count = array($uri => 1);
    $prod = array_keys($view_count);
    $count = array_values($view_count);
    $view_count = cross_merge_array($prod, $count);  // view count array
 } else {
    // if cookie exists
    $temp = explode('|',$_COOKIE['view_count']);    // explode string
    $prod = array_values(array_filter($temp, "even",ARRAY_FILTER_USE_KEY));  // prod array
    $count = array_values(array_filter($temp, "odd",ARRAY_FILTER_USE_KEY));  // count array
    if ( array_search($uri, $prod) !== FALSE ){ // if is not first view of the product, increase count
        $pos = array_search($uri, $prod);
        $count[$pos] += 1;
    } else {        // else, insert product and set count = 1
        array_push($prod, $uri);
        array_push($count, 1);
    }
    $view_count = cross_merge_array($prod, $count);   //merge prod array and count array, for implde string
 }

setcookie('view_count',implode('|', $view_count),$expire);


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
        if ($i < count($arr1)) $arr[] = $arr1[$i]; 
        if ($i < count($arr2)) $arr[] = $arr2[$i]; 
    }
    return $arr;
}
?>