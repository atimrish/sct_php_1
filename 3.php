<?php

$json = (["89050506568", "89050506545", "335566"]);

$arr = json_encode($json);

echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = json_decode($arr);

echo '<pre>';
print_r($arr);
echo '</pre>';
