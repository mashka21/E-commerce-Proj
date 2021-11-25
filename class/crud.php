<?php

require_once 'Db.php';

class crud extends Db {

    public function insert($table_name,$data) {
        if(!empty($data)) {
            $fields = $placeholder = [];

            foreach($data as $field => $value) {
                $fields[] = $field;
                $placeholder[] = ":{$field}";
            }
        }

        $sql = "INSERT INTO {$table_name} (" .implode(',', $fields) .") VALUES(".implode(',',$placeholder). ")";
        $stmt = $this->db->prepare($sql);

        try {

            $this->db->beginTransaction();

            $stmt->execute($data);
            $this->db->commit();
            $insert_id = $this->db->lastInsertId();
            return $insert_id;
        }
        catch(Exception $e) {
            echo "Error: ", $e->getMessage();
        }
    }


    public function slugify($text, string $divider = '-') {

    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
    }

}


















/**
 * Also it can be use these bottom code without new php file like test.php
 * or in same php file without need any other file
 */
/*
$obj = new crud();

$insertdata = [
    'username'=>'mashquul',
    'user_age'=>24,
];

$obj->insert('user',$insertdata);

*/


?>