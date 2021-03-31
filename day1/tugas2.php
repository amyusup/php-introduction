<?php
    function average($param1, $param2, $param3, $param4)
    {
        $grade;
        $result = ($param1+ $param2+ $param3+ $param4)/4;

        if ($result >= 90 && $result <= 100) {
            $grade = "A";
        } else if ($result >= 80 && $result <= 89) {
            $grade = "B";
        } else if ($result >= 70 && $result <= 79) {
            $grade = "C";
        } else if ($result >= 60 && $result <= 69) {
            $grade = "D";
        } else if ($result >= 0 && $result <= 59) {
            $grade = "E";
        } else {
            $grade = "Nilai tidak valid-";
        }

        echo "Rata-rata = $result <br/>";
        echo "Grade = $grade";
    }


    $mtk = 80;
    $bahasaIndonesia = 90;
    $bahasaInggris = 89;
    $ipa = 69;

    if(empty($mtk)||empty($bahasaIndonesia)||empty($bahasaInggris)||empty($ipa)){
        echo "Nilai tidak boleh kosong";
    }else if(!is_int($mtk)||!is_int($bahasaIndonesia)||!is_int($bahasaInggris)||!is_int($ipa)){
        echo "Nilai tidak valid";
    }else{
        average($mtk, $bahasaIndonesia, $bahasaInggris, $ipa);
    }
    
?>