<?php
$a = 20;
$b = 0;

$product = $a * $b;
$difference = $a - $b;
$sumarry = $a + $b;

if ($b != 0 ) {
    $portion = $a / $b;
}

else {
    $portion = "nelze dělit nulou";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p> a = <?= $a; ?> </p>
    <p> b = <?= $b; ?> </p> 
    <p>Součet: <?= $a; ?> + <?= $b; ?> = <?= $sumarry; ?> </p>
    <p>Součin: <?= $a; ?> * <?= $b; ?> = <?= $product; ?> </p>
    <p>Rozdíl: <?= $a; ?> - <?= $b; ?> = <?= $difference; ?> </p>
    <p>Podíl: <?= $a; ?> / <?= $b; ?> = <?= $portion; ?> </p>


</body>
</html>