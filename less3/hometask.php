<?php

// Задание 1.
// Есть ли более элегантное решение? Наверное, но это первое что мне пришло в голову...
//$userString = 'C:\OpenServer\testsite\www\someFile.txt';
$userString = 'C:\Program Files\Open Server\OSPanel\Open Server x64.exe';

function getFileName($string){
  $nameWithOutEnd = explode('.', $string);
  $res = $nameWithOutEnd[0];
  $fullName = explode('\\', $res);;
  $res2 = count($fullName);
  $resEnd = $res2-1;
  //var_dump($fullName[$resEnd]);
  return $fullName[$resEnd];
}
//var_dump(getFileName($userString));

// Задание 2
function stringConverter($string, $flag){
  if (gettype($string) == 'string') {
    switch ($flag) {
      case up: $result = strtoupper($string); break;
      case down: $result = strtolower($string); break;
      case updown: $result = ucwords(strtolower($string)); break;
      default: $result = "Допустимые флаги: up, down и updown!";
    }
    return $result;
  } else {
      echo "Вы ввели не строку!";
    }

}
$string = 'FDSKJ ASDGJK ASDJN';
$flag = 'updown';
//var_dump(stringConverter($string, $flag));

//Задание 4
$create_arr = function (){
    $num = rand(5, 15);
    $arr = range($num, 345, $num);
    return $arr;
};
function get_sum($arr){
    return array_sum($arr);
}

function aLotOfArr($arr){
    $arrays = [];
    for ($i = 0; $i < 5; $i++){
        array_push($arrays, $arr());
    }
    return $arrays;
}
$res = aLotOfArr($create_arr);

//var_dump($res);
foreach ($res as $arr) {
    $sum_arr[] = get_sum($arr);
    var_dump(get_sum($arr));
    $result = max($sum_arr);
}
var_dump($result);
// fgfdgdg
