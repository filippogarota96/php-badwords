<?php

/*Creare una variabile con un paragrafo di testo.
  Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * */

$badword = $_GET["badword"];
//variabile con il paragrafo
$text = 'Stamattina ho visto a quel ' . $badword . ' di Asdrubale e gli ho urlato: "ciao ' . $badword . ' !!!"';
// sostituisco la badword con ***
$badword_replace = str_replace($badword, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<!-- stampo a schermo la variabile $text con la sua lunghezza -->
<p><?php echo 'la lunghezza del paragrafo è '. strlen($text) . ' parole.' ?></p>
<!-- stampo a schermo il paragrafo con la badword sostituita -->
<p><?php echo $badword_replace; ?></p>

<body>

</body>

</html>