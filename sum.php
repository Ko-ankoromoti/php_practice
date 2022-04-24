<?php
echo 'hello php!';
echo "\n";



function sum(){ 
    $result = 0;
    for($i = 1; $i <= 10; $i++ ){
        $result += $i;
    }
    
    return $result;       
 }   
 
 echo sum();
 echo "\n"; 
 
 function sum2($max) {
     $result = 0;
     
     for($i = 1; $i <= $max; $i++ ){
         $result += $i;
     }
     
     return $result;
 }
 
 echo sum2(100);
 echo "\n";
 
  
 
 $string = "ABCDEF";
 echo strlen($string);
 echo "\n";
 

 $string = "I love Ruby!";
 $new_string = str_replace("Ruby", "PHP", $string);
 echo $new_string;
 echo "\n";
 
 
 $array = array(1,2,3,4,5,6,7,8,9,10);
 echo count($array);
 echo"\n";
 
 
 $array = array(2,5,9,7,3,1,8,6,4);
 asort($array);
 print_r($array);
 arsort($array);
 print_r($array);
 echo "\n";
 
 
 function baisuu($nibai){
    
     return $nibai * 2;
 }
 echo baisuu(12345);
 echo "\n"; 
 
 
 function add($a,$b){
     return $a + $b;
 }
 
 echo add(2, 6);
 echo "\n";
 
 
 function kakezan($arr){
     $result = 1;
     foreach($arr as $a){
         $result *= $a;
         
     }
     return $result;
 }
 
 echo kakezan(array(1,3,5,7,9));
 echo "\n";
 
 
 
 function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
         if($a > $max_number){
             $max_number = $a;
         }
     }
         return $max_number;
     
 }     
 echo max_array(array(1,5,2));  
 echo "\n";
 
 
 
 $text = '<p>test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
 echo strip_tags($text);
 echo "\n";
 echo strip_tags($text, '<p><a>');
 echo "\n";
 
 
 $stack = array("orange", "banana");
 array_push($stack, "apple", "raspberry");
 print_r($stack);
 echo "/n";
 
 
 $array1 = array("color" => "red", 2,4);
 $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
 $result = array_merge($array1, $array2);
 print_r($result);
 echo "\n";
 
 
 
 $nextWeek = time() + (7 * 24 * 60 * 60);
 echo 'Now:       '. date('Y-m-d') ."\n";
 echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
 
 
 
 $tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
 $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
 $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y"));
 echo "\n";
 
 