<?php

/*
Специально для Loftblog
Пример для работы с ini-файлом
*/

$data = parse_ini_file('config.ini', true);

echo '<pre>';
print_r($data);
echo '</pre>';