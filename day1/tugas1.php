<?php
    $biodata = [
        "name"  =>  "Ahmad Maulana Yusup",
        "age"   =>  20,
        "hobbies"   =>  [
            "Handball",
            "Volleyball",
            "Cycling"
        ],
        "isMaried" =>  false,
        "schoolList"    =>  [
            [
                "name"  => "TK Darul Ihya",
                "yearIn"    =>  2005,
                "yearOut"   =>  2006,
                "major" =>  null
            ],
            [
                "name"  => "SD 1 CIOMAS",
                "yearIn"    =>  2006,
                "yearOut"   =>  2012,
                "major" =>  null
            ],
            [
                "name"  => "SMPN 1 CIOMAS",
                "yearIn"    =>  2012,
                "yearOut"   =>  2015,
                "major" =>  null
            ],
            [
                "name"  => "SMKN 1 CIOMAS",
                "yearIn"    =>  2015,
                "yearOut"   =>  2018,
                "major" =>  null
            ],
        ],

        "skills"    =>  [
            [
                "skillName" =>  "React",
                "level"     =>  "Beginer"
            ],
            [
                "skillName" =>  "Node",
                "level"     =>  "Beginer"
            ],
            [
                "skillName" =>  "PHP(native/CI/Laravel)",
                "level"     =>  "Beginer"
            ],
            [
                "skillName" =>  "CSS(native/Bootstrap/Materialize)",
                "level"     =>  "Beginer"
            ],
            [
                "skillName" =>  "VB.NET",
                "level"     =>  "Beginer"
            ],
            [
                "skillName" =>  "SQL(MySql)",
                "level"     =>  "Beginer"
            ],
        ]
        ];
        echo "<pre>";
        var_dump($biodata);
?>