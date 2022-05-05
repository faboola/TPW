
<?php
//APRO lo stream del file 
$file = fopen('demo.txt','r');

/* 
PARAMETRI DI FOPEN
r: apre in sola lettura
w: apre in scrittura, e se il file non esiste lo crea
w+: apre in lettura e scrittura. Se il file esiste SOVRASCRIVE i contenuti
“a” – apre in sola scrittura. Puntatore alla FINE del file - preserva i dati esistenti. 
“r+” – apre Lettura + scrittura
“a+” – apre in lettura/scrittura. Puntatore alla FINE del file - preserva i dati esistenti.
“x” – Crea nuovo file per sola scrittura.
*/

$size = filesize('demo.txt'); /*trova la dimensione del file*/
$contents=fread($file,$size); //legge il file fino alla fine (filesize);

echo($contents); //STAMPA I CONTENUTI


//OPERAZIONI VARIE
fclose($file); //chiudo il file


?>
