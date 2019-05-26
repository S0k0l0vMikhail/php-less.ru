<?php
$get = $_GET; //переопределяем, чтобы не испортить глобальный $_GET массив
$id = $get['id'];
var_dump($id);
//получить по id соответствующий товар, записать его в отдельный массив
//вывести информацию по этому товару в <section>

//$auth = 
//если пользователь не авторизован, то вывести для пользователя textarea




$goods = [
	[
		'id' => 1,
		'title' => 'Piano',
		'price' => 12345,
	],
	[
		'id' => 2,
		'title' => 'Guitar',
		'price' => 1380,
	],
	[
		'id' => 3,
		'title' => 'Drum',
		'price' => 5630,
	],

]


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Title</title>
</head>
<body>
	<section>
		<!-- вывод информации по товару -->
	</section>
	<!-- отображение блока комментариев для авторизованного пользователя -->
	<?php if (): ?>
	<?php endif; ?>


</body>
</html>

