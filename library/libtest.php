<?php
require 'vendor/autoload.php';
use Michelf\Markdown;
$markdown = new Markdown();
echo $markdown->defaultTransform("#Hello World");
?>