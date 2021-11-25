<?php
    require_once '../../class/crud.php';

    $obj = new crud();

    $data = [
        'category_name' => $_POST['category_name'],
        // 'category_url' => $obj->slugify($_POST['category_name']),
    ];

    if($obj->insert('category',$data)){
        echo 'success';
    }else {
        echo 'error';
    }

?>


