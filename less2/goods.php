<?php

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
		<?php foreach ($goods as $good) : ?>
			<h3><?php echo $good['title']?></h3>
			<!-- <img src="/img/goods/ --><?php //echo $good['img']; ?><!-- "> -->
			<p><?php echo $good['price']?></p>
		<a href="good.php?id=<?php echo $good['id']; ?>">Подробнее</a>
		
	<?php endforeach;	?>
	</section>


</body>
</html>

