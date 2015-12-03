<?php

class ArrayClass
{
    
   /* 
    * Сортировка по возрастанию: метод "Расчёска".
    * 
    */
   function sortDesc($array) {
           $gap = $n = count($array);
           $swap = true;

           while ($gap > 1 || $swap) {
                   if ($gap > 1)$gap = floor($gap / 1.24733);
                   $i = 0; 
                   $swap = false;
                   while ($i + $gap < $n) { 
                           if ($array[$i] < $array[$i + $gap]) {
                                   list($array[$i], $array[$i + $gap]) = array($array[$i + $gap], $array[$i]);
                                   $swap = true;
                           }
                           $i++;
                   }
           }        
           return $array;
   }
    
}


?>