<!--Descrizione:
//Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
//Una parola da censurare viene passata dall’utente tramite parametro GET.
//Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

// Variabili
$speech = "La cosa più bella di un computer portatile e che, per quanta roba tu ci possa mettere dentro,
           non diventa più grande o più pesante.";
// Transform speech to lower case
$lowerSpeech = strtolower($speech);

// La lunghezza dei carrateri 
$lengthSpeech = strlen($speech);

//var_dump($_GET);
$censuredWord = $_GET["censuredWord"];
//echo $censuredWord;
$lowerCensuredWord = strtolower($censuredWord);

//Parola censurata
$newWord = "***";
$replacedWord = str_replace($censuredWord, $newWord, $speech);
$lengthReplacedSpeech = strlen($replacedWord);
//echo $replacedWord;

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
    <h2>Paragrafo originale</h2>
    <p> <?php echo $speech; ?> </p>
    <span>La lunghezza del paragrafo é: <?php echo $lengthSpeech; ?></span>
  </div>
  <div style="padding-top: 70px;">
    <form method="get">
      <span>Digita una parola del testo da nascondere</span> <input type="text" name="censuredWord">
      <input type="submit" value="invia">
    </form>
  </div>
  <div>
    <h2>Paragrafo con parole censurate</h2>
    <p> <?php echo $replacedWord; ?> </p>
    <span> La lunghezza del paragrafo é: <?php echo $lengthReplacedSpeech ?> </span>
  </div>
</body>

</html>