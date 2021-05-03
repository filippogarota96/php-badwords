<?php
  /*Creare una variabile con un paragrafo di testo.
  Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * */
  $badword = $_GET["badword"];
  $text = 'Stamattina ho visto a quel ' . $badword . ' di Asdrubale e gli ho urlato: "ciao '. $badword . ' !!!"';
  $badword_replace = str_replace($badword, '***', $text );
  var_dump($badword_replace);
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
  <p><?php echo $badword_replace; ?></p>
<body>
  
</body>

</html>