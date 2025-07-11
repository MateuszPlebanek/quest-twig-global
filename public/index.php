<?php
error_reporting(E_ALL & ~E_DEPRECATED);
// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);
