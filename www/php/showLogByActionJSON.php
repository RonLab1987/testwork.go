<?php
include_once 'DataBaseClass.php';

$db = new DataBase;
$result = $db->showLogByAction($_POST['log_action']);
echo json_encode( $result);


?>