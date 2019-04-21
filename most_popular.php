<?php

if ( isset($_COOKIE['view_count']) ) {
    $temp = explode('|',$_COOKIE['view_count']);
    $prod = array_values(array_filter($temp, "even",ARRAY_FILTER_USE_KEY));
    $count = array_values(array_filter($temp, "odd",ARRAY_FILTER_USE_KEY));
    $view_count = array();
    for($i=0; $i<count($prod);$i++){
        $view_count[$prod[$i]] = $count[$i];
    }
    arsort($view_count);
    $view_count_5 = array_slice($view_count, 0, 5);
}



function odd($var)
{
    return($var & 1);
}

function even($var)
{

    return(!($var & 1));
}

?>