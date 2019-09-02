<?php

function sortByPriceAscending(string $jsonString) : string
{
    $s = json_decode($jsonString);
    $items = [];
    $objs  = [];
    foreach($s as $v) {
        $items[$v->name]=sprintf("%010.2f",$v->price) . $v->name;
        $objs[$v->name]=$v;
    }
    asort($items);
    $output = [];
    foreach($items as $key => $value) {
        $output[] = $objs[$key];
    }
    return json_encode($output);
}

echo sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"rice","price":4.04}]');

?>
