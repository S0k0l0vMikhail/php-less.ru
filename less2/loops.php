<?php 
//

$age =  12; //рекомендуется использовать константы - т.к. она меняет значения сразу по всему коду
$sex = "male";

if ($age < 16) {
	echo "Возраст неподходящий для работы<br>";
}
	//elseif ($sex === "male" && $age > 59) {echo "Мужчина на пенсии";}
		/*elseif ($sex === "male" && $age < 59) {echo "Мужчина работает";}
			elseif ($sex === "female" && $age > 55) {echo "Женщина на пенсии";}
				elseif ($sex === "female" && $age < 55) {echo "Женщина работает, а должна отдыхать на тропических островах!"};*/

/*
if (условие) : 
	//code
elseif (condition) :
	# code...
elseif (condition) :
	# code...
endif; */

$code = 345;
switch ($code) {
	case '345':
		echo 4.15 * 10;
				break;
	case '675':
		# code...
		break;
	
	default:
		echo "Код города не определен";
		break;
}

//Альтернативный код
switch (variable) :
	case 'value1':
		# code...;
		break;
	case 'value2': //объединение кейсов
	case 'value3':
		# code...;
		break;
	default:
		# code...;
endswitch;





 ?>