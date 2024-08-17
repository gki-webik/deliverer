<?php
require_once __DIR__ . '/router.php';

get('/', 'index.php');

get('/about', '/views/about.php');
get('/contact', '/views/contact.php');
get('/vacancy', '/views/vacancy.php');
?>