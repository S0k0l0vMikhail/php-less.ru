<?php
//$link = $_POST['url'];

$link = 'https://yandex.ru/';
//$link = 'https://www.php.net/manual/ru/function.file-put-contents.php';
// $isLink = filter_var($link, FILTER_VALIDATE_URL);
// $hash = md5($isLink);
// var_dump($hash);

function cutlink($oglink){
  $file = 'links.txt';
  $domaine = 'mysite.ru/';
  $hash = md5($oglink);
  $isLink = filter_var($oglink, FILTER_VALIDATE_URL);
  $flag = true;
  if ($oglink && ($isLink != false)) {
    $offset = 0;
    $maxlen = 49;
    $res = file_get_contents($file, false, NULL, $offset);
    //var_dump($res);
    if ($res) {
      for ($offset=0; $flag == true; $offset+=49) {
        $res = file_get_contents($file, false, NULL, $offset, $maxlen);
        $str = explode(":", $res);
        $i=0;
        //var_dump($str[$i] . " результат перебора строк из файла");
        $hashFromFile = $str[$i];
        //var_dump("созданный в начале хэш: " . $hash . " и полученная из файла строка: " . $hashFromFile . " состояние флага " . $flag);
        $i++;
        if($hash == $hashFromFile) $flag = false;
        //var_dump("состояние флага после сравнения " . $flag);
      }
    }
      if ($flag) {
        //echo "не равен <br>";
        $shortLink = $domaine . random_int(1000, 9999);
        //var_dump($shortLink . " созданая короткая ссылка");
        $coupleLinks = $hash.":".$shortLink.PHP_EOL;
        file_put_contents($file, $coupleLinks, FILE_APPEND | LOCK_EX);
        //var_dump("your short link: " .$shortLink);
      } else {
        //echo "равен <br>";
        $shortLink = $str[1];
        //var_dump($shortLink);
      }
    echo "ok";
    return $shortLink;
  } else {
    echo "no ok";
    return $error = "link is empty or is it not link";
  }

}

var_dump(cutlink($link));
