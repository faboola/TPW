
<?php
//APRO lo stream del file 
$file = fopen('demo2.txt','w'); //apro in scrittura

$text = 'Ciao sono il contenuto del file di testo 2';

fwrite($file,$text); //primo parametro: RISORSA (resource), cioè lo stream che apro con fopen e NON il nome del file


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

//OPERAZIONI VARIE
fclose($file); //chiudo il file

?>
