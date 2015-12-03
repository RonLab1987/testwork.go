<?php
include_once 'DataBaseClass.php';

$db = new DataBase;
$result = $db->showAction();
echo json_encode( $result);


?>