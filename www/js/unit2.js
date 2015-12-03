// ОБРАБОТЧИКИ СОБЫТИЙ * ОБРАБОТЧИКИ СОБЫТИЙ * ОБРАБОТЧИКИ СОБЫТИЙ * ОБРАБОТЧИКИ СОБЫТИЙ *

$('document').ready(function(){showLog();showAction();});
$('#sortByAction').click(showLogByAction);

// END ОБРАБОТЧИКИ СОБЫТИЙ | END ОБРАБОТЧИКИ СОБЫТИЙ | END ОБРАБОТЧИКИ СОБЫТИЙ |



// DOM FUNCTION  * DOM FUNCTION  * DOM FUNCTION  * DOM FUNCTION

/*
 * showLogTables()
 * получаем json из showLog() и 
 * выводим в виде таблицы 
 *
 */
function showLogTables(json){    
    
    var html="<tr><th>дата</th><th>событие</th><th></th></tr>";
       
    for(var i=0; i<json.length; i++){
     html += "<tr><td>"+json[i]['log_date']+"</td><td>"+json[i]['log_action']+"</td><td> <button class='btn btn-danger btn-sm' onclick='deleteLog("+ json[i]['log_id'] +")'> удалить</button>  </td></tr>";   
    }
    $('#logTable').html(html);
}

/*
 * showActionList()
 * получаем json из showAction() и 
 * выводим в виде вариантов выбора 
 *
 */
function showActionList(json){    
    
    var listAdd="";
    var listSort="<option>все</option>";
       
    for(var i=0; i<json.length; i++){
     listSort += "<option>"+json[i]['log_action']+"</option>";
     listAdd += "<option value='"+json[i]['log_action']+"'></option>";
    }
    $('#actionAdd').html(listAdd);
    $('#actionSort').html(listSort);
    
}

// END DOM FUNCTION | END DOM FUNCTION | END DOM FUNCTION | END DOM FUNCTION |



// AJAX  FUNCTION * AJAX  FUNCTION * AJAX  FUNCTION * AJAX  FUNCTION

/*
 * showLog()
 * получаем логи
 *
 */
function showLog(){
    $.ajax({
        method: "POST",
        dataType: "json",
        url: "php/showLogJSON.php",
        error: function(json, status, error){console.log(status); console.log(error);},
        success: function(json){ console.dir(json);showLogTables(json);}
    });
}

/*
 * deleteLog()
 * 
 *
 */
function deleteLog(id){
    console.log(id);
    
    $.ajax({
        method: "POST",
        dataType: "text",
        url: "php/deleteLog.php",
        data: {'log_id':id},
        success: function(html){ console.log(html); showLog();showAction();}
    });
    
}

/*
 * addLog()
 * 
 *
 */
function addLog(){
    var action = $("#action").val();
    console.log(action);
    
    $.ajax({
        method: "POST",
        dataType: "text",
        url: "php/addLog.php",
        data: {'log_action':action},
        success: function(html){ console.log(html); showLog(); showAction();}
    });
}


/*
 * showAction()
 * получаем события
 *
 */
function showAction(){
    $.ajax({
        method: "POST",
        dataType: "json",
        url: "php/showActionJSON.php",
        error: function(json, status, error){console.log(status); console.log(error);},
        success: function(json){ console.dir(json);showActionList(json);}
    });
}

/*
 * showLogByAction()
 * сортировка вывода log-a по событию
 *
 */
function showLogByAction(){
    
    if($('#actionSort').val() !== 'все'){
        $.ajax({
        method: "POST",
        dataType: "json",
        url: "php/showLogByActionJSON.php",
        data: {'log_action': $('#actionSort').val()},
        error: function(json, status, error){console.log(status); console.log(error);},
        success: function(json){ console.dir(json);showLogTables(json);}
        
    });
    }
    else{
       showLog(); 
    }
}
    
    
    
    



// END AJAX  FUNCTION | END AJAX  FUNCTION | END AJAX  FUNCTION |  END AJAX  FUNCTION |