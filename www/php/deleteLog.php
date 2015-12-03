<?php
include_once 'DataBaseClass.php';

if(isset($_POST['log_id'])){
  $db = new DataBase;
  $result = $db->deleteLog($_POST['log_id']);  
}
 else {
  $result = 'NO POST';  
}
echo $result;
?>