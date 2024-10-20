<!DOCTYPE html>
<html>

<body>

    <?php
    //operator aritmatika
    $x = 15;
    $y = 3;

    echo $x + $y . "<br>";
    echo $x - $y . "<br>";
    echo $x * $y . "<br>";
    echo $x / $y . "<br>";
    echo $x % $y . "<br>";
    echo $x ** $y . "<br><br>";


    //operator asigment
    $x = 89;
    echo $x;
    echo "<br>";

    $x = 24;
    $x += 124;

    echo $x;
    echo "<br>";
    echo "<br>";

    // operator perbandingan
    $x = 111;
    $y = "111";

    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x <> $y);
    ?>

</body>

</html>