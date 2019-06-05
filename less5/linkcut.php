<?php
//$ogLink = $_POST['url'];
$ogLink = 'http://php-less.ru/less5/';
//var_dump($post['url']);
// var_dump(filter_var($post['url'], FILTER_VALIDATE_URL));
// echo filter_var($post['url'], FILTER_VALIDATE_URL);
function cutlink($link){
  $domaine = 'mysite.ru/';
  $arrLinks = [];
  $isLink = filter_var($link, FILTER_VALIDATE_URL);
  if ($link && ($isLink != false)) {
    $hash = md5($link);
    echo "0";
    foreach ($arrLinks as $key => $value) {
      echo "1";
      // if ($hash != $arrLinks[$key]) {
      //   echo "2";
      //   $arrLinks = ["$hash" => "$domaine .= random_int(1000, 9999)"];
      //   $shortLink = $arrLinks[$key];
      // } else {
      //   echo "3";
      //   $shortLink = $arrLinks[$key];
      // }
      $res = 1;
    }
    echo $res;
    //$domaine .= random_int(1000, 9999);
    //echo $domaine;
    echo "ok";

  } else {
    echo "no ok";
  }
}

cutlink($ogLink);
//file_put_contents('links.txt', 'hello', FILE_APPEND || LOCK_EX);
//var_dump(file_get_contents('links.txt', false, NULL));
