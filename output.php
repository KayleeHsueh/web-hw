<?php

$php_files = scandir(__DIR__);

$no_files = '/(footer|nav|output)/';

foreach ($php_files as $index => $php_file) {
  if (preg_match($no_files, $php_file) || !preg_match('/php/', $php_file) ) {
    unset($php_files[$index]);
  }
}

foreach ($php_files as $index => $php_file) {
  echo 'will get ' . $php_file . "\n";
  $content = file_get_contents('http://localhost:8088/' . $php_file);
  $content = preg_replace('/\.php/', '.html', $content);
  echo 'get ' . $php_file . "\n";
  $file_name = preg_replace('/php/', 'html', $php_file);
  echo 'will input ' . $file_name . "\n";
  file_put_contents(__DIR__ . '/' . $file_name, $content);
  echo 'put ' . $file_name . "\n";
}
