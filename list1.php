<?php
include_once 'ArrayClass.php';


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