<?php
$uri = (string)$_SERVER['REQUEST_URI'];
echo $uri;
$id = isset($_GET['id'])?$_GET['id']:0;
 
if (!isset($_COOKIE['history'])) {           // if no product history
    $his[] = $uri;                           // just store product uri
 } else {                                    // if product history not empty
    $his = explode('|',$_COOKIE['history']);  // explode
    if (in_array($uri, $his)){
        print_r("DUPLICATE!!!!  ");
        $pos = array_search($uri, $his);
        echo $pos;
        if ($pos = 0){
            $new_his = array_slice($his, $pos+1);
        } else {$new_his = array_merge(array_slice($his, 0, $pos-1), array_slice($his, $pos+1));
        print_r( "   second part")
        print_r(array_slice($his, $pos+1));
        $his = $new_his;
        
    }
    array_unshift($his, $uri);
    if (count($his) > 10) {             // store 10 url
        array_pop($his);
    }
 }

$expire=time()+60*60*24*30;
setcookie('history',implode('|', $his),$expire);

?>