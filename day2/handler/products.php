<?php
    include_once("../config/db.php");

if(isset($_POST['submit_insert'])){
    // echo "successfully";
    if(!empty($_POST['name'])||!empty($_POST['description'])||!empty($_POST['price'])||!empty($_POST['stock'])){
    $data = [
        'name'  =>  $_POST['name'],
        'description' =>  $_POST['description'],
        'price' =>  $_POST['price'],
        'stock' =>  $_POST['stock']
    ];
    insert($data);
    }else{
        echo "<script>alert('Form must be filled');
        window.location.href='../views/insert.php';</script>";
    }
}

function insert($data)
{
    global $conn;
    $name =  $conn->real_escape_string($data['name']);
    $description =  $conn->real_escape_string($data['description']);
    $price = $conn->real_escape_string($data['price']);
    $stock = $conn->real_escape_string($data['stock']);
    $insert = $conn->query("INSERT INTO tb_products (name, description,price , stock) VALUES ('$name','$description','$price', '$stock')");

    if(!$insert){
        // echo "Failed insert.";
        echo $conn->error;
        echo "<script>alert('Data failed to added.');
        </script>";
    }else{
        echo "<script>alert('Data successfully added.');
        window.location.href='../views/index.php';</script>";
    }
}

function getLIst()
{
   global $conn;
   $result = [];
   $list = $conn->query("SELECT * FROM tb_products");
   while($row = $list->fetch_assoc()){
       array_push($result, $row);
   }
   return $result;
}

if(isset($_GET['id_delete'])){
    $id = $_GET['id_delete'];
    $delete = $conn->query("DELETE FROM tb_products WHERE id=$id");
    if(!$delete){
        echo "<script>alert('Delete failed');
        window.location.href='../views/index.php';</script>";
        die();
    }else{
        echo "<script>alert('Book has successfully deleted.');
        window.location.href='../views/index.php';</script>";
    }
}

if(isset($_GET['id_detail'])){
    $id = $_GET['id_detail'];
   $result = [];
   $detail = $conn->query("SELECT * FROM tb_products WHERE id=$id");
   while($row = $detail->fetch_assoc()){
       array_push($result, $row);
   }
   return $result;
}

if(isset($_GET['id_edit'])){
    $id = $_GET['id_edit'];
   $result = [];
   $detail = $conn->query("SELECT * FROM tb_products WHERE id=$id");
   while($row = $detail->fetch_assoc()){
       array_push($result, $row);
   }
   return $result;
}

if(isset($_POST['submit_edit'])){
    // echo "successfully";
    if(!empty($_POST['name'])||!empty($_POST['description'])||!empty($_POST['price'])||!empty($_POST['stock'])){
        $data = [
            'id'  =>  $_POST['id'],
            'name'  =>  $_POST['name'],
            'description' =>  $_POST['description'],
            'price' =>  $_POST['price'],
            'stock' =>  $_POST['stock']
        ];
    update($data);
    }else{
        $id = $_POST['id'];
        // echo $id;
        echo "<script>alert('Form must be filled');
        window.location.href='../views/edit.php?id_edit=$id';</script>";
    }
}

function update($data)
{
    global $conn;
    $id =  $conn->real_escape_string($data['id']);
    $name =  $conn->real_escape_string($data['name']);
    $description =  $conn->real_escape_string($data['description']);
    $price = $conn->real_escape_string($data['price']);
    $stock = $conn->real_escape_string($data['stock']);
    $update = $conn->query("UPDATE tb_products SET name='$name',description='$description', price='$price', stock='$stock' WHERE id=$id");

    if(!$update){
        echo "<script>alert('Data failed edited.');
        window.location.href='../views/index.php';</script>";
        // echo $conn->error;
    }else{
        echo "<script>alert('Data successfully edited.');
        window.location.href='../views/index.php';</script>";
    }
}
