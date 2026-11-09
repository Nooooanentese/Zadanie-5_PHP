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

    for($i = 0; $i < 10; $i++) {
        $tab[$i] = (int)readline("Podaj liczbe: ");
    }

    $min = $tab[0];
    $max = $tab[0];
    $suma = 0;
    $ile3 = 0;
    $parzyste = 0;
    $nieparzyste = 0;
    $podzielne = 0;

    for($i = 0; $i < 10; $i++) {

    if($tab[$i] < $min) {
        $min = $tab[$i];
    }

    if($tab[$i] > $max) {
        $max = $tab[$i];
    }

    $suma = $suma + $tab[$i];

    if($tab[$i] == 3) {
        $ile3++;
    }

    if($tab[$i] % 2 == 0) {
        $parzyste++;
    }
    else {
        $nieparzyste++;
    }

    if($tab[$i] % 3 == 0) {
        $podzielne++;
    }
}

$srednia = $suma / 10;

echo "Najmniejsza liczba: " . $min . "<br>";
echo "Najwieksza liczba: " . $max . "<br>";
echo "Srednia: " . $srednia . "<br>";
echo "Ilosc wystapien liczby 3: " . $ile3 . "<br>";

for($i = 0; $i < 10; $i++) {
    for($j = 0; $j < 9; $j++) {

        if($tab[$j] > $tab[$j + 1]) {
            $pom = $tab[$j];
            $tab[$j] = $tab[$j + 1];
            $tab[$j + 1] = $pom;
        }
    }
}

echo "Tablica posortowana: ";

for($i = 0; $i < 10; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>";

$mediana = ($tab[4] + $tab[5]) / 2;

echo "Mediana: " . $mediana . "<br>";

echo "3 najmniejsze liczby: ";

for($i = 0; $i < 3; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>";

echo "3 najwieksze liczby: ";

for($i = 7; $i < 10; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>Tablica po podniesieniu do kwadratu: ";

for($i = 0; $i < 10; $i++) {
    $tab[$i] = $tab[$i] * $tab[$i];
    echo $tab[$i] . " ";
}

echo "<br>";

echo "Liczby parzyste: " . $parzyste . "<br>";
echo "Liczby nieparzyste: " . $nieparzyste . "<br>";
echo "Liczby podzielne przez 3: " . $podzielne;

?>

</body>
</html>