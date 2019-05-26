<?php
$goods = [
    [
        'id'=>1,
        'title'=>'Piano',
        'price'=>2345
    ],
    [
        'id'=>2,
        'title'=>'Guitar',
        'price'=>1753
    ],
    [
        'id'=>3,
        'title'=>'Drum',
        'price'=>1224
    ],
];
$get = $_GET;
$id = $get['id']; // получаем id товара
// TODO: получить товар из массива $goods по id, сохранить в переменную $good
$isAuth = true; // флаг - авторизован пользователь или нет
//var_dump($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<section>
<!--    TODO: вывести информацию о товаре $good-->
<?php foreach ($goods as $key => $good): ?>
	<article>
			<?php if ($good['id'] == $id): ?>
			<h3><?php echo $good['title']?></h3>
			<img src="/img/<?php echo $good['img'];?>" alt="<?php echo $good['img'];?>">
			<p><?php echo $good['price']?></p>
			<?php endif; ?>
	</article>
<?php endforeach; ?>
</section>


<!--    TODO: если пользователь авторизован $isAuth - отобразить блок для добавления комментариев, в противном случае, сообщить, что ему нужно авторизоваться-->
<?php if ($isAuth): ?>
	<form action="#" method="post">
	<p><b>Введите ваш комментарий:</b></p>
	<p><textarea rows="10" cols="45" name="text"></textarea></p>
	<p><input type="submit" value="Отправить"></p>
	</form>
<?php endif; ?>

</body>
</html>
