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

for($i = 0; $i < 100; $i++) {
    $tab[$i] = rand(1, 20);
}

echo "Tablica: ";

for($i = 0; $i < 100; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>";

$max = $tab[0];
$ile = 0;
$min = $tab[0];
$indeks = 0;

for($i = 0; $i < 100; $i++) {

    if($tab[$i] > $max) {
        $max = $tab[$i];
    }

    if($tab[$i] < $min) {
        $min = $tab[$i];
        $indeks = $i;
    }
}

for($i = 0; $i < 100; $i++) {
    if($tab[$i] == $max) {
        $ile++;
    }
}

echo "<br>Najwieksza liczba: " . $max;
echo "<br>Ilosc wystapien: " . $ile;

echo "<br>Liczby nieparzyste: ";

for($i = 0; $i < 100; $i++) {
    if($tab[$i] % 2 != 0) {
        echo $tab[$i] . " ";
    }
}

echo "<br>Liczby z nieparzystych indeksow: ";

for($i = 0; $i < 100; $i++) {
    if($i % 2 != 0) {
        echo $tab[$i] . " ";
    }
}

echo "<br>Liczby z przedzialu od 5 do 15: ";

$ile = 0;

for($i = 0; $i < 100; $i++) {
    if($tab[$i] >= 5 && $tab[$i] < 15) {
        echo $tab[$i] . " ";
        $ile++;
    }
}

echo "<br>Ilosc tych liczb: " . $ile;

$a = (int)readline("Podaj liczbe a: ");

$minRoznica = abs($tab[0] - $a);
$najblizsza = $tab[0];

for($i = 1; $i < 100; $i++) {
    if(abs($tab[$i] - $a) < $minRoznica) {
        $minRoznica = abs($tab[$i] - $a);
        $najblizsza = $tab[$i];
    }
}

echo "<br>Najblizsza liczba: " . $najblizsza;

echo "<br>Minimum: " . $min;

if($indeks > 0) {
    echo "<br>Poprzednik minimum: " . $tab[$indeks - 1];
}
else {
    echo "<br>Brak poprzednika";
}

if($indeks < 99) {
    echo "<br>Nastepnik minimum: " . $tab[$indeks + 1];
}
else {
    echo "<br>Brak nastepnika";
}

$tab2 = array();
$j = 0;

for($i = 0; $i < 100; $i++) {
    if($tab[$i] > 10) {
        $tab2[$j] = $tab[$i];
        $j++;
    }
}

echo "<br>Nowa tablica: ";

for($i = 0; $i < $j; $i++) {
    echo $tab2[$i] . " ";
}

$tab3 = array();
$suma = 0;

for($i = 0; $i < 100; $i++) {
    $suma = $suma + $tab[$i];
    $tab3[$i] = $suma;
}

echo "<br>Tablica sum: ";

for($i = 0; $i < 100; $i++) {
    echo $tab3[$i] . " ";
}

for($i = 0; $i < 100; $i++) {
    for($j = 0; $j < 99; $j++) {

        if($tab[$j] < $tab[$j + 1]) {
            $pom = $tab[$j];
            $tab[$j] = $tab[$j + 1];
            $tab[$j + 1] = $pom;
        }
    }
}

echo "<br>Tablica malejaco: ";

for($i = 0; $i < 100; $i++) {
    echo $tab[$i] . " ";
}

echo "<br>Liczby wystepujace minimum 3 razy: ";

for($i = 0; $i < 100; $i++) {

    $ile = 0;

    for($j = 0; $j < 100; $j++) {
        if($tab[$i] == $tab[$j]) {
            $ile++;
        }
    }

    if($ile >= 3) {
        $jest = false;

        for($k = 0; $k < $i; $k++) {
            if($tab[$k] == $tab[$i]) {
                $jest = true;
            }
        }

        if($jest == false) {
            echo $tab[$i] . " ";
        }
    }
}

?>

</body>
</html>