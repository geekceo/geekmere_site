<?php
$i = htmlentities(file_get_contents("count_beta_eva_console.txt"));
$i = $i + 1;
$fd = fopen("count_beta_eva_console.txt", 'w') or die("не удалось создать файл");
fwrite($fd, $i);
fclose($fd);
header ('Location: /all_pages/beta.html');  // перенаправление на нужную страницу
    exit();    // прерываем работу скрипта, чтобы забыл о прошлом
?>