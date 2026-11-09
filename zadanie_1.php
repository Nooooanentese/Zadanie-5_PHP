<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>

    <?php

    $tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

    echo "Zawartosc 5 komorki tablicy: " . $tab1[4];

    echo "<br>";

    $tab1[6] = 12;

    $tab2 = array();

    for($i = 0; $i < 10; $i++) {
        $tab2[$i] = $tab1[$i];
    }

    $tab3 = array();

    for($i = 0; $i < 10; $i++) {
        $tab3[$i] = $tab1[$i] + $tab2[$i];
    }

    echo "Tablica tab1: ";

    for($i = 0; $i < 10; $i++) {
        echo $tab1[$i] . " ";
    }

    echo "<br>";

    echo "Tablica tab2: ";

    for($i = 0; $i < 10; $i++) {
        echo $tab2[$i] . " ";
    }

    echo "<br>";

    echo "Tablica tab3: ";

    for($i = 0; $i < 10; $i++) {
        echo $tab3[$i] . " ";
    }

    echo "<br>";

    for($i = 0; $i < 10; $i++) {
        $tab2[$i] = $tab1[9 - $i];
    }

    echo "Tablica tab2 w odwrotnej kolejnosci: ";

    for($i = 0; $i < 10; $i++) {
        echo $tab2[$i] . " ";
    }
	
?>

</body>
</html>