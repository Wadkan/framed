<?php
echo 'Hello here';

require "vendor/autoload.php";

Use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_AUTO);
echo $blade->run("hello",array("name"=>"Wadkan"));
