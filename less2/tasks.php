
<?php
//Отсортировать массив по 'price'
$arr = [
'1'=> [
    'price' => 10,
    'count' => 2
],
'2'=> [
    'price' => 5,
    'count' => 5
],
'3'=> [
    'price' => 8,
    'count' => 5
],
'4'=> [
    'price' => 12,
    'count' => 4
],
'5'=> [
    'price' => 8,
    'count' => 4
],
];

$res = [];
foreach ($arr as $key => $value) {
$res[$key] = $value['price'];
}
array_multisort($res, SORT_DESC, SORT_NUMERIC, $arr );
print_r($arr);
