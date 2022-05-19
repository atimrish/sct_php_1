<?php

connectFile($_GET['page']);


function connectFile ($a) {

    switch ($a) {

        case 2:
            include '2.php';
            break;
        case 3:
            include '3.php';
            break;
        default:
            include '1.php';
            break;
    }

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

<a href="index.php?page=1">Первый</a>
<a href="index.php?page=2">Второй</a>
<a href="index.php?page=3">Третий</a>

</body>
</html>


