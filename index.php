<?php

/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

<?php

$paragrafo = "Siamo batteri, coi denti neri, siamo schifosi, con l'alitosi, paradontosi la gengivite paradontite placcaaa!!!
Silvercare. L'unico con argento antibatterico. Anche per noi!";
$censura = $_GET['schifosi'];
$paragrafoCensurato = str_replace($censura, "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPBadword</title>
</head>
<body>

<p>
<?php echo $paragrafo; ?>
</p>

<p>
Lunghezza paragrafo: <?php echo strlen($paragrafo) ?>
</p>

<h1>
Parola da censurare: <?php echo $censura ?>
</h1>

<p>
<?php echo $paragrafoCensurato; ?>
</p>


</body>
</html>