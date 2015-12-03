<?php

class DataBase{
    
    /*
     *  соединяемся с БД
     */
    function dbConnect(){
        if(!isset($GLOBALS['db_connect'])){
			$SqlServer="localhost";
			$Database="bike_service";
			$DatabaseUserMechLogin="bs_mechanic";
			$DatabaseUserMechPassword="bs_mechanic";
			$GLOBALS['db_connect'] = new mysqli($SqlServer, $DatabaseUserMechLogin, $DatabaseUserMechPassword, $Database);
			$GLOBALS['db_connect']->set_charset("utf8");
			
		}
        
    }
    
    /*
     * выполняем запрос
     */
    function dbQuery($Query){
	
	if(!isset($GLOBALS['db_connect'])){
		$database = new DataBase;
		$data = $database->dbConnect();
		//echo "go bd_connect";
	};
	
	$query = $GLOBALS['db_connect']->query($Query);
	return $query;
	}
    
    
       /* 
     	* функция showLog() делает
	* выборку из log и подгатавливает
        * резудьтат для перевода в JSON
	*
	*/
	function showLog(){
		$result = array();
		$query = "SELECT `log_id`, `log_date`, `log_action` FROM `log` " ;
				
		$database = new DataBase;
		$qResult = $database->dbQuery($query);
				
		if($qResult){		
			while($qRow = $qResult->fetch_assoc()){
				$result[] = $qRow;
				}	
		}
		
		return  $result;	
	}
        
        /* 
     	* функция showLogByAction() делает
	* выборку из log и подгатавливает
        * резудьтат для перевода в JSON
	*
	*/
	function showLogByAction($log_action){
		$result = array();
		$query = "SELECT `log_id`, `log_date`, `log_action` FROM `log` WHERE `log_action` = '$log_action' " ;
				
		$database = new DataBase;
		$qResult = $database->dbQuery($query);
				
		if($qResult){		
			while($qRow = $qResult->fetch_assoc()){
				$result[] = $qRow;
				}	
		}
		
		return  $result;	
	}
        
        /* 
     	* функция deleteLog() 
	*
	*/
	function deleteLog($log_id){
		
		$query = "DELETE FROM `log` WHERE `log_id` = $log_id" ;
				
		$database = new DataBase;
		$qResult = $database->dbQuery($query);
				
		if($qResult){		
		   return  "delete $log_id";	
		}
                else{
                   return  "error delete"; 
                }	
	}
        
        /* 
     	* функция addLog() 
	*
	*/
	function addLog($log_action){
		
		$query = "INSERT INTO `log`(`log_date`, `log_action`) VALUES ( NOW(), '$log_action')" ;
				
		$database = new DataBase;
		$qResult = $database->dbQuery($query);
				
		if($qResult){		
		   return  "add $log_action";	
		}
                else{
                   return  "error add"; 
                }	
	}
        
        /* 
     	* функция showAction() делает
	* выборку вариантов log_action из log и подгатавливает
        * резудьтат для перевода в JSON
	*
	*/
	function showAction(){
		$result = array();
		$query = "SELECT DISTINCT `log_action` FROM `log` " ;
				
		$database = new DataBase;
		$qResult = $database->dbQuery($query);
				
		if($qResult){		
			while($qRow = $qResult->fetch_assoc()){
				$result[] = $qRow;
				}	
		}
		
		return  $result;	
	}
    
}


?>