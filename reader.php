<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reader</title>
</head>
<body>
    <?php 
        $phrase = $_GET["phrase"];
        $censor = $_GET["censor"];
    ?>

    <h1>La frase scritta è: <?php echo $phrase ?></h1>
    <h2>La frase è lunga <?php echo strlen($phrase) ?></h2>
    <hr>
    <?php $phrase = str_replace($censor, "***", $phrase) ?>
    <h2>Sembra ci siano delle parole con accettate, ecco la nuova stringa:</h2>
    <h1><?php echo $phrase ?></h1>
    <h2>La frase adesso è lunga <?php echo strlen($phrase) ?></h2>
</body>
</html>