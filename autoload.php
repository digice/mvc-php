<?php

/** MVC Autoload **/

$mvc_dir = __DIR__.DIRECTORY_SEPARATOR.'lib';

$mvc_itr = new DirectoryIterator($mvc_dir);

foreach ($mvc_itr as $item) {
  $file = $item->getFilename();
  if (substr($file,0,1) != '.') {
    $path = $mvc_dir.DIRECTORY_SEPARATOR.$file;
    require_once($path);
  }
}
