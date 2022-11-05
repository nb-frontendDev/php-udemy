<?php
$string = 'Hello World' . PHP_EOL;
$file = 'hello.txt';
file_put_contents($file, $string, FILE_APPEND);