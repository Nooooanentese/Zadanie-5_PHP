<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>

    <?php

$tab = array();

echo "Ciag Fibonacciego: ";

$tab[0] = 0;
$tab[1] = 1;

for($i = 2; $i < 100; $i++) {
    $tab[$i] = $tab[$i - 1] + $tab[$i - 2];
}

for($i = 0; $i < 100; $i++) {
    echo $tab[$i] . " ";
}

echo "<br><br>";

echo "Kolejne potegi liczby 2: ";

for($i = 0; $i < 100; $i++) {
    $tab[$i] = pow(2, $i);
    echo $tab[$i] . " ";
}

echo "<br><br>";

echo "Ciag 3, 6, 9, 12: ";

for($i = 0; $i < 100; $i++) {
    $tab[$i] = 3 * ($i + 1);
    echo $tab[$i] . " ";
}

echo "<br><br>";

echo "Ciag 2, 4, 8, 16: ";

$tab[0] = 2;

for($i = 1; $i < 100; $i++) {
    $tab[$i] = $tab[$i - 1] * 2;
}

for($i = 0; $i < 100; $i++) {
    echo $tab[$i] . " ";
}

?>

</body>
</html>