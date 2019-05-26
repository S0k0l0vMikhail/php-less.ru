<?php

echo "Массив";


//пустой массив
$arr = array();
$arr = [];


//нумерованные массивы - элементы хранятся под индексом начиная с нуля
$arr = [3, 6, 9, 1]; 
echo "<br>", $arr;
var_dump($arr);
$arrElem = $arr[2]; //9
$arr[2] = 2345;
var_dump($arr);
var_dump($arrElem);

//ассоциативные массивы - элементы храняться в парах ключ-значение
$arr = [
	'key1' => 'value',
	'key2' => 'value',
	'key3' => 'value'
];
var_dump($arr);

$arrElem = $arr['key1'];
var_dump($arrElem);
$arr['key1'] = 'новое значение';
var_dump($arr);

$arr = [3, 6, 9, 1];

foreach ($arr as $value) {
	$value += 50; //так нельзя изменить элементы! они вернут прежнее значение
	var_dump($value);
}
unset($value);
var_dump($arr);

//начиная с php 7.0
//для изменения элементов массива

foreach ($arr as &$value) {
	$value +=50;
}
var_dump($arr);

$a = 6;
$b = $a;
var_dump($a);
var_dump($b);
$b = 8;
var_dump($b);


$c = 6;
$d = &$a; //d - ссылка на c
var_dump($c);
var_dump($d);
$d = 8;
var_dump($d);


$userInfo = [
	'id' => 1,
	'login' => 'qwe',
	'pwd' => 123
];

//перебор ассоциативного массива
//если нужно получить ключи и значения
foreach ($userInfo as $key => $value) {
	//в переменную $key будут записываться ключи
	//в переменную $value 	будут записываться значения
	var_dump($key . ' = ' . $value);
}







?>





