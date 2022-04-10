<?php

$file1 = '1.php';
$file2 = '2.php';
$file3 = '3.php';
$file4 = 'index.php';

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

<?php

$text = '456';
$text1 = '969294233720368754775807';

?>

<div><?= (int)$text ?></div>
<div><?= (int)$text1 ?></div>

<!--9223372036854775807-->
<!--выход за границы типа int-->


<h3>Navigation</h3>
<ul>
    <li><a href="<?= $file1 ?>">1.php</a></li>
    <li><a href="<?= $file2 ?>">2.php</a></li>
    <li><a href="<?= $file3 ?>">3.php</a></li>
    <li><a href="<?= $file4 ?>">index.php</a></li>
</ul>

</body>
</html>
