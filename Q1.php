<?php

function loop($i){
    $record = 0;
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $record = 1;
            break;
        }
    }
    if($record == 0){
        echo $j." ";
    }
}

for($i=2;$i<=100;$i++){
loop($i);
}
?>