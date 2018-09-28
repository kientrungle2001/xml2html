<?php
if(count($argv) > 1) {
	$name = $argv[1];
	$content = file_get_contents($name . '.txt');
	$content = preg_replace('/\{(\w+)/', '{"tagName":"$1",', $content);
	$content = preg_replace('/([\w-]+)=/', '"$1":', $content);
	// echo $content;
	$structure = json_decode($content, true);
	var_dump($structure);
} else {
	echo 'Bạn cần nhập tên file';
}

