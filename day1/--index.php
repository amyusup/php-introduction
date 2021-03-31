<?php
    $array1 = [
        "fruits" => [
        "apple",
        "manggo",
        "pineapple"
        ],
        "hobbies" => [
        "football",
        "swiming",
        "basketball"
        ]
    ];

    foreach($array1 as $arr){
        for ($i=0; $i <= count($array1); $i++) { 
            echo "$arr[$i] ";
        }
        
    }
  
?>