<?php
$name = 'siteSearch';
$value = 'A campsite has been searched.';
$expire = new DateTime ('+1 year');
$path = '/';
setcookie($name, $value, $path);

$siteSearched = filter_input(INPUT_COOKIE, 'siteSearch');
?>




 
