<?php
$uri = (string)$_SERVER['REQUEST_URI'];
echo $uri;
 
if (!isset($_COOKIE['history'])) {           // if no product history
    $his[] = $uri;                           // just store product uri
 } else {                                    // if product history not empty
    $his = explode('|',$_COOKIE['history']);  // explode
    if (in_array($uri, $his)){
        echo "DUP";
        $pos = array_search($uri, $his);
        if ($pos == 0){
            echo "Remaining ";
            print_r(array_slice($his, $pos+1));
            $new_his = array_slice($his, $pos+1);
        } else {
            print_r($his);
            echo "First ";
            print_r(array_slice($his, 0, $pos-2));
            echo "\n Second ";
            print_r(array_slice($his, $pos+2));
            $new_his = array_merge(array_slice($his, 0, $pos-2), array_slice($his, $pos+2));
        }
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