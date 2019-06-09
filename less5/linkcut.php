<?php
//$link = $_POST['url'];

//$link = 'https://yandex.ru/';
$link = 'https://yandex.ru/yandsearch?win=44&clid=37246&text=%D1%86%D1%8B%D0%BA%D0%BB&lr=2&redircnt=1560098511.1';
//$link = 'https://www.php.net/manual/ru/function.file-put-contents.php';
// $isLink = filter_var($link, FILTER_VALIDATE_URL);
// $hash = md5($isLink);
// var_dump($hash);

function cutlink($oglink){
  $file = 'links.txt';
  $domaine = 'mysite.ru/';
  $hash = md5($oglink);
  $flag = true;
  $isLink = filter_var($oglink, FILTER_VALIDATE_URL);
  if ($oglink && ($isLink != false)) { // проверяет что переменная переданна и что фильтрация прошла успешно
    $res = file_get_contents($file, false, NULL, $offset);
    var_dump($res);
    if ($res) { // проверяет что из файла пришли строки
      //$flag = false;
      //for ($offset=0; $offset < strlen($res) && $flag == false ; $offset+=49) { // цикл для перебора всех срок из файла, и получение нужной части строки после explode
      for ($offset = 0; $offset < strlen($res); $offset += 49) { // цикл для перебора всех срок из файла, и получение нужной части строки после explode
        var_dump(strlen($res). " длинна файла в при начале перебора");
        var_dump($offset. " offset при начале перебора");
        $maxlen = 49;
        $res = file_get_contents($file, false, NULL, $offset, $maxlen);
        $str = explode(":", $res);
        var_dump($str);
        var_dump("массив после explode");
        //$i = $i + 49;
        //var_dump("i ". $i);
        var_dump($str[$i] . " результат перебора строк из файла");
        $hashFromFile = $str[$i];
        var_dump("созданный в начале хэш: " . $hash . " и полученная из файла строка: " . $hashFromFile . " состояние флага " . $flag);
        $i++;
        if($hash == $hashFromFile) {$flag = false;} else {$flag = true;};
        var_dump("состояние флага после сравнения " . $flag);
      }
    }
      if ($flag) { // если во время цикла было найдено хоть одно совпадение то флаг будет фолс, и будет выполнен else, по умолчанию флаг тру
        echo "не равен <br>";
        $shortLink = $domaine . random_int(1000, 9999);
        //var_dump($shortLink . " созданая короткая ссылка");
        $coupleLinks = $hash.":".$shortLink.PHP_EOL;
        //var_dump($coupleLinks);
        file_put_contents($file, $coupleLinks, FILE_APPEND);
        //var_dump("your short link: " .$shortLink);
        unset($flag);
      } else {
        echo "равен <br>";
        $shortLink = $str[1];
        var_dump($shortLink);
      }
    echo "ok";
    return $shortLink;
  } else {
    echo "no ok";
    return $error = "link is empty or is it not link";
  }

}

var_dump(cutlink($link));
