<?php

// ricezione dei dati

$paragrafo = $_POST['paragrafo'];
$parola = $_POST['parola'];

// stampa del paragrafo originale e della sua lunghezza

echo "<p>Paragrafo originale: $paragrafo</p>";
echo "<p>Lunghezza: " . strlen($paragrafo) . " caratteri</p>";

// sostituzione della parola da censurare

$paragrafo_censurato = str_ireplace($parola, '***', $paragrafo);

// stampa del paragrafo censurato e della sua lunghezza

echo "<p>Paragrafo censurato: $paragrafo_censurato</p>";
echo "<p>Lunghezza: " . strlen($paragrafo_censurato) . " caratteri</p>";
?>