<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    
</head>
<body>
<?php

$par = "Dio computer, che sei nei desktop, sia santificato il tuo socket";

$bad_word = $_GET["badword"];

$par2 = str_replace($bad_word,"***",$par);


?>
<h2>Paragrafo:</h2>
<p><?php echo ($par);?></p>
<h2>Lunghezza del paragrafo:</h2>
<p><?php echo (strlen($par));?></p>
<!-- censura -->
<p>-----------------------------------</p>
<h2>Paragrafo censurato:</h2>
<p><?php echo ($par2);?></p>
<h2>Lunghezza del paragrafo censuratoS:</h2>
<p><?php echo (strlen($par2));?></p>
<!-- fine censura -->
</body>
</html>