
<?php
// http://localhost:8888/php-badwords/?censura=PHP

$testo = "PHP (acronimo ricorsivo di 'PHP: Hypertext Preprocessor', preprocessore di ipertesti;
originariamente acronimo di 'Personal Home Page[1]) è un linguaggio di scripting interpretato,
originariamente concepito per la programmazione di pagine web dinamiche.
L'interprete PHP è un software libero distribuito sotto la PHP License[2].
Attualmente è principalmente utilizzato per sviluppare applicazioni web lato server,
ma può essere usato anche per scrivere script a riga di comando o applicazioni stand-alone
con interfaccia grafica. Un esempio di software scritto in PHP è MediaWiki, su cui si basano
i progetti wiki della Wikimedia Foundation come Wikipedia.
Grazie soprattutto alla diffusione di Wordpress[3] (CMS scritto in PHP), secondo le statistiche,
è il linguaggio lato server più usato al mondo.";

echo $testo;
echo "<br>";
echo "Lunghezza testo: " . strlen($testo);

$censura =  $_GET["censura"];

var_dump($_GET);
echo "<br>";
echo $censura;
echo "<br>";
echo stripos($testo, "PHP");
//echo "Il testo contiene la parola <strong>PHP</strong> ??" . strpos(strtolower, "PHP");

?>

