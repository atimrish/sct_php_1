<?php

$page = 2;
$arr = [2, 4, 1, 9, 5];

//сделал это через массив, т.к. задача с двумя/тремя переменными показалась мне легкой
//сортировка массива
for ($i = 0; $i < count($arr); $i++) {

    for ($j = $i; $j < count($arr); $j++) {

        if($arr[$i] > $arr[$j])
        Swap($arr[$i], $arr[$j]);

    }

}

outArray($arr);

function Swap(&$a, &$b) {
    $c = $a;
    $a = $b;
    $b = $c;
}

function outArray($array) {

    for($i = 0; $i < count($array); $i++)echo $array[$i] . ' ';

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Navigation</h2>
<ul>
    <li><a href="1.php" <?php if($page === 1) : ?> style="font-weight: 600" <?php endif; ?>  >1.php</a></li>
    <li><a href="2.php" <?php if($page === 2) : ?> style="font-weight: 600" <?php endif; ?> >2.php</a></li>
    <li><a href="3.php" <?php if($page === 3) : ?> style="font-weight: 600" <?php endif; ?> >3.php</a></li>
</ul>


</body>
</html>
