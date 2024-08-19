<?php
/* Разработано в WK Studio - gki-webik.ru/studio */
require_once __DIR__ . '/router.php';

get('/', 'index.php');

get('/about', '/views/about.php');
get('/contact', '/views/contact.php');
get('/vacancy', '/views/vacancy.php');
get('/policy', '/views/policy.php');
?>