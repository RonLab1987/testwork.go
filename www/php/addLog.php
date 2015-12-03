<?php
include_once 'DataBaseClass.php';

if(isset($_POST['log_action'])){
  $db = new DataBase;
  $result = $db->addLog($_POST['log_action']);  
}
 else {
  $result = 'NO POST';  
}
echo $result;
?>