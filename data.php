<?php

// Definir a time zone da região atual
date_default_timezone_set('America/Sao_Paulo');

// Retorna data e hora "H" para formato 24horas e "h" para formato 12 horas
// H:i:s , horas minutos e segundos
    echo date('d/m/Y H:i:s');

$date = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');
echo "<hr>";
$time = time();
echo date('d/m/Y', $time);
echo "<hr>";

//MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/y - h:i', $data_pagamento);
echo "<hr>";
//Converter data string para data
$data = '2019-04-10 13:30:00';

$data = strtotime($data);
echo date('d/m/Y H:i', $data);

?>