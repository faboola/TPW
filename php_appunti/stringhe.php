<?php 

/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/*                         STRINGHE: OPERAZIONI COMUNI                        */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */





/* -------------------------------------------------------------------------- */
/*                           VERIFICARE LA LUNGHEZZA                          */
/* -------------------------------------------------------------------------- */

$stringa = 'Stringa di esempio';
echo strlen($stringa); // restituirà 18

/* -------------------------------------------------------------------------- */
/*                      ESTRARRE UNA PORZIONE DI STRINGA                      */
/* -------------------------------------------------------------------------- */

//substr(stringa, posizione_di_partenza, lunghezza_da_tagliare(opt))

$str='CiaoMondo';
echo substr($str,3); //restituisce 'mondo' (parte da 0)

/* -------------------------------------------------------------------------- */
/*          Cercare una porzione di testo all'interno di una stringa          */
/* -------------------------------------------------------------------------- */


$str = 'Il mio gatto è rosso e si chiama Mike';
echo strpos($str, 'Mike'); // restituirà 34 che è la posizione in cui inizia la stringa Mike
echo strpos($str, 'James'); // restituirà false perché non ci sono occorrenze


/* -------------------------------------------------------------------------- */
/*                   Sostituire le occorrenze di una stringa                  */
/* -------------------------------------------------------------------------- */

$str = 'Il mio gatto si chiama Mike';
echo str_replace('gatto', 'cane', $stringa); // stamperà "il mio cane si chiama Mike"

//POSSO USARLO ANCHE SUGLI ARRAY
$stringhe = array(
    'Il mio gatto si chiama Mike',
    'Il mio gatto è bianco e nero'
);

str_replace('gatto', 'cane', $stringhe); // sostituirà tutte le occorrenze di gatto con cane all'interno dell'array


/* -------------------------------------------------------------------------- */
/*                             RIMUOVERE GLI SPAZI                            */
/* -------------------------------------------------------------------------- */

$stringa = ' ciao ';
echo trim($stringa);  // stampa 'ciao' senza spazi iniziali e finali
echo ltrim($stringa); // stampa 'ciao ' senza spazi iniziali
echo rtrim($stringa); // stampa 'ciao senza spazi finali

/* -------------------------------------------------------------------------- */
/*                           SUDDIVIDERE UNA STRINGA                          */
/* -------------------------------------------------------------------------- */

$data = 'Mario;Giovanni;Luca';
$elementi = explode(';', $data); //separatore, stringa da esplodere

var_dump($elementi); //restituisce un array



/* -------------------------------------------------------------------------- */
/*                     FORMATTARE LE STRINGHE CON SPRINTF                     */
/* -------------------------------------------------------------------------- */

$nome = 'Mario';
$eta = 32;
$citta = 'Moncalieri';
$provincia = 'Torino';
$regione = 'Piemonte';
$stringa = $nome . ' ha ' . $eta . ' anni ed abita a ' . $citta . ' in provincia di ' . $provincia . ', nella regione ' . $regione . '.';
//poco leggibile, allora possiamo usare SPRINTF
//prende almeno due parametri: formato + elementi da sostituire

$formato = '%s ha %d anni ed abita a %s in provincia di %s, nella regione %s';
$stringa = sprintf($formato, $nome, $eta, $citta, $provincia, $regione);

echo $stringa;

// come funzionano i placeholder?
// %d   -> numero intero
// %s   -> stringa
// %d&& -> decimale con due cifre dopo la virgola

//possiamo stampare direttamente con printf($formato, $nome, $eta, $citta, $provincia, $regione)


?>


