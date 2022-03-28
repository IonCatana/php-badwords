<!--Descrizione:
//Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
//Una parola da censurare viene passata dall’utente tramite parametro GET.
//Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

// Variabili
$speech = "La cosa più bella di un computer portatile e che, per quanta roba tu ci possa mettere dentro,
           non diventa più grande o più pesante.";
$lengthSpeech = strlen($speech);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP BadWords</title>
</head>

<body>
  <div>
    <p> <?php echo $speech; ?> </p>
    <span>La lunghezza del paragrafo é: <?php echo $lengthSpeech; ?></span>
  </div>
</body>

</html>