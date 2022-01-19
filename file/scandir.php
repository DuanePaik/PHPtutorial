<?php
$dir    = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1); //역순으로

print_r($files1);
print_r($files2);
?>