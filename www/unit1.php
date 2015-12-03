<?php
include_once 'php/ArrayClass.php';


for($i=0; $i<rand(10, 30); $i++ ){
    $arr[] = rand(0, 100); 
}

//echo "<p>исходный массив: <br> " . implode(" | ", $arr) . '</p>' ;

$arrClass = new ArrayClass;
$descArr = $arrClass->sortDesc($arr);
//echo "<p>sortDesc() массив: <br> " . implode(" | ", $descArr) . '</p>' ;

$ascArr = $arr;
qSortAsc($ascArr,0,count($ascArr)-1);
//echo "<p>qSortAsc() массив: <br> " . implode(" | ", $ascArr) . '</p>' ;



/*
 * Сортировка по возрастанию: метод "Быстрая сортировка".
 * 
 */

function qSortAsc (&$array, $inLeft, $inRight){
    $l = $inLeft;
    $r = $inRight;
    $refElement = $array[floor(($inLeft + $inRight) / 2)];
        do {
          while ($array[$r] > $refElement) { 
            $r--;
          }
          while ($array[$l] < $refElement) { 
            $l++;
          }
           if ($l <= $r) {
            list($array[$r], $array[$l]) = array($array[$l], $array[$r]);
            $l++;
            $r--;
          }
        } while ($l <= $r);

        if ($r > $inLeft) { 
          qSortAsc($array, $inLeft, $r); 
        }
        
        if ($l < $inRight) { 
          qSortAsc($array, $l, $inRight);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Задание №1</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
    <div class="container">
      <div class="head">
          <h1>ЛАПТЕВ РОМАН <small>[ 8(912)337-07-70, ronlab@yandex.ru ]</small></h1>    
      </div>   
      <ol class="breadcrumb">
          <li><a href="index.html">Главная</a></li>
          <li><a href="unit1.php">Задание №1</a></li>
      </ol>  
      <div class="row">
          <div class="col-md-12">
          <h3>ИСХОДНЫЙ МАССИВ </h3> 
          <small>длинна массива rand(10, 30), значения rand(0, 100)</small>;
          <p class="lead"> <?php echo implode(" | ", $arr); ?> </p>
          </div>
      </div>
        
      <div class="row">
          <div class="col-md-12">
          <h3>МАССИВ ОТСОРТИРОВАННЫЙ ПО ВОЗРАСТАНИЮ </h3> 
          <p class="lead"> <?php echo implode(" | ", $ascArr); ?> </p>
          </div>
      </div>
        
      <div class="row">
          <div class="col-md-12">
          <h3>МАССИВ ОТСОРТИРОВАННЫЙ ПО УБЫВАНИЮ  </h3> 
          <p class="lead"> <?php echo implode(" | ", $descArr); ?> </p>
          </div>
      </div>
      
        <p><a class="btn btn-block btn-default" href="unit1.php">ОБНОВИТЬ</a></p>  
    </div>
     
      
    
     
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
