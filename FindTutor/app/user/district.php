<?php



$table = 'district';

$errors = array();
$id = '';
$name = '';


$district = selectAll($table);





if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $district = selectOne($table, ['id' => $id]);
    $id = $district['id'];
    $name = $district['name'];
  
}





