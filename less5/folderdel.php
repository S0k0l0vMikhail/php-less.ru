<?php

function deleteYourDir($dirname){
  if (is_dir($dirname)) {
    $arr = glob("$dirname/*");
    if (count($arr) == 0) {
      rmdir($dirname);
    } else {
      foreach ($arr as $value) {
        if(is_dir($value)){
          deleteYourDir($value);
        } else {
          unlink($value);
        }
    }
    }
  } else {
    echo " this is not dir ";
  }
}
deleteYourDir('some_dir');
