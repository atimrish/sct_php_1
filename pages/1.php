<?php

$name = 'Andrew';
$address = 'asdsasd';
$age = 20;
$gender = 'man';

$file1 = '../index.php';
$file2 = '2.php';

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

<div>Name: <?= $name ?></div>
<div>Address: <?= $address ?></div>
<div>Age: <?= $age ?></div>
<div>Gender: <?= $gender ?></div>

<h3>Navigation</h3>
<ul>
    <li><a href="<?= $file1 ?>">index.php</a></li>
    <li><a href="<?= $file2 ?>">2.php</a></li>
</ul>

</body>
</html>




