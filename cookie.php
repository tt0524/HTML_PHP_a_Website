<?php
$uri = (string)$_SERVER['REQUEST_URI'];

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

 if (!isset($_COOKIE['view_count'])) {           // if no product history
    $view_count = array($uri => 1);
    $prod = array_keys($view_count);
    echo "prod";
    print_r($prod);
    $count = array_values($view_count);
    echo "count";
    $view_count = cross_merge_array($prod, $count);
    print_r($count);
    print_r ("view_count ");
    print_r($view_count);              // just store product uri
    $test = implode('|', $view_count);
    print_r ("After Implode ");
    print_r($test);
 } else {
    print_r($_COOKIE['view_count']);
    $temp = explode('|',$_COOKIE['view_count']);
    print_r( "temp  ");
    print_r($temp);
    $prod = array_filter($temp, "even",ARRAY_FILTER_USE_KEY);
    print_r( "prod  ");
    print_r($prod);
    $count = array_values(array_filter($temp, "odd",ARRAY_FILTER_USE_KEY));
    print_r("count  ");
    print_r($count);
    print_r($uri);
    print_r(array_search($uri, $prod));
    if ( is_null(array_search($uri, $prod)) ){
        print_r("****NOT FOUND****");
        array_push($prod, $uri);
        array_push($count, 1);    
    } else {
        $pos = array_search($uri, $prod);
        print_r($pos);
        print_r("***FOUND***");
        $count[$pos] += 1;
    }
    $view_count = cross_merge_array($prod, $count);
    print_r("view_count  ");
    print_r($view_count);
 }


print_r("/////TEST SECTION***");
$test_array = array(1,1,2,3);
print_r(array_values($test_array));
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
            if ($i < count($arr1)) $arr[] = $arr1[$i]; // 判断，避免下标越界
            if ($i < count($arr2)) $arr[] = $arr2[$i]; // 判断，避免下标越界
        }
        return $arr;
    }
?>