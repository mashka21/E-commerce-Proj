<?php

include 'crud.php';

$obj = new crud();

$insertdata = [
    'username'=>'imran',
    'user_age'=>22,
];


$obj->insert('user',$insertdata);


?>