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

echo "Podaj 10 liter: ";

for($i = 0; $i < 10; $i++) {
    $tab[$i] = readline();
}

echo "Zawartosc tablicy: ";

for($i = 0; $i < 10; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>";

$wyraz = readline("Podaj wyraz 10-literowy: ");

for($i = 0; $i < 10; $i++) {
    $tab[$i] = $wyraz[$i];
}

echo "Tablica wypelniona wyrazem: ";

for($i = 0; $i < 10; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>";

for($i = 0; $i < 10; $i++) {

    if($tab[$i] >= 'a' && $tab[$i] <= 'z') {
        $tab[$i] = strtoupper($tab[$i]);
    }
    else {
        $tab[$i] = strtolower($tab[$i]);
    }
}

echo "Po zamianie liter: ";

for($i = 0; $i < 10; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>";

shuffle($tab);

echo "Losowa kolejnosc: ";

for($i = 0; $i < 10; $i++) {
    echo $tab[$i] . " ";
}

?>

</body>
</html>