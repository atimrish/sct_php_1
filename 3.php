<?php

if (!empty($_GET['page'])) {
    switch ($_GET['page']) {
        case 1:
            echo 'Первое стихотворение';
            break;
        case 2:
            echo 'Второе стихотворение';
            break;
        case 3:
            echo 'Третье стихотворение';
            break;
        case 4:
            echo 'Четвертое стихотворение';
            break;
        default:
            echo 'Ошибка';
            break;
    }
}


?>
<ul>
    <li><a href="3.php?page=1">1</a></li>
    <li><a href="3.php?page=2">2</a></li>
    <li><a href="3.php?page=3">3</a></li>
    <li><a href="3.php?page=4">4</a></li>
</ul>




