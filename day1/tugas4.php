<?php
    $data = [
        "id" => 1,
        "name" => "Leanne Graham",
        "username" => "Bret",
        "email" => "Sincere@april.biz",
        "address" => [
          "street" => "Kulas Light",
          "suite" => "Apt. 556",
          "city" => "Gwenborough",
          "zipcode" => "92998-3874",
        ],
        "phone" => "1-770-736-8031 x56442",
        "website" => "hildegard.org",
    ];

    $newData = [
        // &$data,
        "name" => "Ahmad Maulana Yusup",
        "email" => "amyusup26@gmail.com",
        "hobby" => [
            "Badminton", 
            "Volley"
            ]
        ];
    $result  = array_merge($data, $newData);
    echo "<pre>";
    var_dump($result);

    echo "<hr/><br/>";

     ["address"=> $address] = $result;
     ["street"=> $street, "city"=> $city] = $address;
     
     var_dump("Stret => $street <br/> City => $city");
?>