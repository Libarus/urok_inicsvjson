<?php

$list = Array (
    'aaa,bbb,ccc,dddd',
    '123,456,789',
    '"aaa","bbb"'
);

$fp = fopen('file.csv', 'w');

foreach ($list as $line) {
    fputcsv($fp, explode(',', $line),";");
}

fclose($fp);
echo 'ok';
