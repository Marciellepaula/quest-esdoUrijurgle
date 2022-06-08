<?php


  
   $I = 0;
   $J = 7;
   $X = 1;

for($i = 0; $i <12+3 ; $i++){ 
    if ($i % 3 === 0 and $i > 0)
       $X = $X+2;
    if ($i % 3 === 0 and $i > 0) 
       $J = $J+5;
echo "I=${X} J=${J}\n";
      $J = $J - 1;
    
}
