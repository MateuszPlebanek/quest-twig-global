<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require_once __DIR__ . '/../config/twig.php';

echo $twig->render('details.html.twig');