<?php

function printSegitiga($param)
{
    for ($i=0; $i <= $param; $i++) { 
        $start = 0;
        for ($j=$i; $j <= $param; $j++) { 
            echo $start = $start + 1;
        }
        echo "<br/>";
    }

    return null;
}

printSegitiga(5);
    
?>