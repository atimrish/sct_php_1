<?php

$page = 3;

$a = rand(-10, 10);
$b = rand(-10, 10);

echo 'a = ' . $a . '<br>';
echo 'b = ' . $b . '<br>';

if (($a > 0) && ($b > 0)) {
    echo 'Сумма: ' . ($a + $b);
}
else {
    echo 'Разность: ' . (max($a, $b) - min($a, $b));
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
