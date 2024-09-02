<?php
require 'vendor/autoload.php';

$markdownText = file_get_contents('php://input');

$parsedown = new Parsedown();
$html = $parsedown->text($markdownText);

header('Content-type: text/html');
echo $html;

?>