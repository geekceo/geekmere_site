<?php
$i = htmlentities(file_get_contents("count_eva2.txt"));
$i = $i + 1;
$fd = fopen("count_eva2.txt", 'w') or die("не удалось создать файл");
fwrite($fd, $i);
fclose($fd);
header ('Location: /all_pages/eva-8.html');  // перенаправление на нужную страницу
    exit();    // прерываем работу скрипта, чтобы забыл о прошлом
?>