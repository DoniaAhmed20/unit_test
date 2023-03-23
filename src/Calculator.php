<?php 
class Calculator{
    public function Factorial($n)
    {
        if(!(is_int($n)) || !($n>=0))
            return null;
        
            $fact=1;
            for($i =1 ; $i<=$n ; $i++){
              $fact = $fact * $i; 
            }
            return $fact;
    }
}                  

?>