<?php

$img1 = '../img/coffee.png';
$img2 = '../img/designer.png';
$img3 = '../img/hours.png';

$file1 = '1.php';
$file2 = '../index.php';

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

<img src="<?= $img1 ?>" alt="">
<img src="<?= $img2 ?>" alt="">
<img src="<?= $img3 ?>" alt="">

<?php

$img1 = 'img/Shape.png';
$img2 = 'img/Shape1.png';

?>

<img src="<?= $img1 ?>" alt="">
<img src="<?= $img2 ?>" alt="">


<h3>Navigation</h3>
<ul>
    <li><a href="<?= $file1 ?>">1.php</a></li>
    <li><a href="<?= $file2 ?>">index.php</a></li>
</ul>

</body>
</html>
