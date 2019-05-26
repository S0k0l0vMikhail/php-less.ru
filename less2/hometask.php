<?php
echo "Решение 1 задачи с помощью while<br>";

$num = 800;
//$i = 0;
while ($num >= 50):
    $num /= 2;
    $i++;
endwhile;
var_dump($i, $num);
unset($num, $i);

echo "<br>Решение 1 задачи с помощью for<br>";

//$i;
for ($num = 800; $num >= 50 ; $num /= 2) {
  $i++;
}
var_dump($i, $num);
unset($num, $i);

echo "<br>Решение 3 задачи <br>";
// так как надо разобраться с функциями для работы с массивами
// и так как мне было лень вручную создавать нужный массив,
// то я придумал вот такой замудрённый способ создания массива с днями недели :)
// не доделал до конца, так как не совсем понял что значит вывести жирным, могу отдельно вывести сегодняшний день, или весь список.
$today = date("w");
echo "$day<br>";
$arr = range(0, 6);
function days($i){
  switch ($i) {
    case 0:$day = "Воскресенье";break;
    case 1:$day = "Понедельник";break;
    case 2:$day = "Вторник";break;
    case 3:$day = "Среда";break;
    case 4:$day = "Четверг";break;
    case 5:$day = "Пятница";break;
    case 6:$day = "Суббота";break;
  }
  return $day;
}
//var_dump($arr);
$arrListDay = array_map('days', $arr);
//print_r($arrListDay);
foreach ($arrListDay as $key => $value) {
    // print_r($today, $key);
    // if ($today == $key) {
    //   echo "Поздравляю сегодня: $value !";
    // }
    echo "$value ";
}
