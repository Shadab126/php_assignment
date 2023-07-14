<?php  
//Star Pattern
for($i=1; $i<=5; $i++){   
for($j=1; $j<=$i; $j++){   
echo ' * ';   
}  
echo '<br>';   
}  
for($k=5; $k>=1; $k--){   
for($l=1; $l<=$k; $l++){  
echo ' * ';   
}   
echo '<br>';   
}   

//Number Pattern
for($i=1; $i <=10 ; $i++) { 
    for($j=1; $j<=10;$j++){
        
     echo $i*$j." ";
    }
    echo "<br>";
}
