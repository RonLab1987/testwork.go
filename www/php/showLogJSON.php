<?php
include_once 'DataBaseClass.php';

$db = new DataBase;
$result = $db->showLog();
echo json_encode( $result);


?>